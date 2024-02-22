<?php

declare(strict_types=1);

namespace PT1602\PT1602TwigRuleset\Rule;

use FriendsOfTwig\Twigcs\Lexer;
use FriendsOfTwig\Twigcs\Rule\AbstractRule;
use FriendsOfTwig\Twigcs\Rule\RuleInterface;
use FriendsOfTwig\Twigcs\TwigPort\SyntaxError;
use FriendsOfTwig\Twigcs\TwigPort\Token;
use FriendsOfTwig\Twigcs\TwigPort\TokenStream;

class LowerCamelCaseVariable extends AbstractRule implements RuleInterface
{
    /**
     * @throws SyntaxError
     */
    public function check(TokenStream $tokens): array
    {
        $violations = [];

        while (!$tokens->isEOF()) {
            $token = $tokens->getCurrent();

            if (Token::NAME_TYPE === $token->getType() && $this->isNotLowerCamelCase($token->getValue())) {
                if (Token::WHITESPACE_TYPE === $tokens->look(Lexer::PREVIOUS_TOKEN)->getType() && 'set' === $tokens->look(-2)->getValue()) {
                    $violations[] = $this->createViolation(
                        $tokens->getSourceContext()->getPath(),
                        $token->getLine(),
                        $token->columnno,
                        sprintf('The "%s" variable should be in lowerCamelCase.', $token->getValue())
                    );
                }
            }

            $tokens->next();
        }

        return $violations;
    }

    private function isNotLowerCamelCase(string $string): bool
    {
        return !preg_match('/^[a-z]+((\d)|([A-Z0-9][a-z0-9]+))*([A-Z])?$/', $string);
    }
}

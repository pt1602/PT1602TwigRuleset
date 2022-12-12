<?php

declare(strict_types=1);

namespace PT1602\PT1602TwigRuleset;

use FriendsOfTwig\Twigcs\RegEngine\RulesetBuilder;
use FriendsOfTwig\Twigcs\RegEngine\RulesetConfigurator;
use FriendsOfTwig\Twigcs\Ruleset\RulesetInterface;
use FriendsOfTwig\Twigcs\Validator\Violation;
use FriendsOfTwig\Twigcs\Rule;

class PT1602TwigRuleset implements RulesetInterface
{
    private int $twigMajorVersion;

    public function __construct(int $twigMajorVersion)
    {
        $this->twigMajorVersion = $twigMajorVersion;
    }

    public function getRules(): array
    {
        $configurator = new RulesetConfigurator();
        $configurator->setTwigMajorVersion($this->twigMajorVersion);
        $builder = new RulesetBuilder($configurator);

        return [
            new Rule\ForbiddenFunctions(Violation::SEVERITY_ERROR, ['dump']),
            new Rule\RegEngineRule(Violation::SEVERITY_ERROR, $builder->build()),
            new Rule\TrailingSpace(Violation::SEVERITY_ERROR),
        ];
    }
}

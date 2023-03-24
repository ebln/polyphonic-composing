<?php

declare(strict_types=1);

// @see https://mlocati.github.io/php-cs-fixer-configurator/#version:3.15

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->exclude('tests')
    ->exclude('polyphony')
    ->notPath('phpstan-baseline.php')
    ->in(__DIR__);

$config = new \PhpCsFixer\Config();
$config->setRiskyAllowed(true)
    ->setRules(
        [
            '@PER'                                             => true,
            '@Symfony'                                         => true,
            '@PhpCsFixer'                                      => true,
            '@PhpCsFixer:risky'                                => true,
            '@PHPUnit100Migration:risky'                       => true,
            '@PHP80Migration:risky'                            => true,
            '@PHP82Migration'                                  => true,
            'no_superfluous_phpdoc_tags'                       => true,
            'native_function_invocation'                       => false,
            'concat_space'                                     => ['spacing' => 'one'],
            'phpdoc_types_order'                               => ['null_adjustment' => 'always_first', 'sort_algorithm' => 'alpha'],
            'single_line_comment_style'                        => ['comment_types' => [ /* 'hash' */],],
            'phpdoc_summary'                                   => false,
            'cast_spaces'                                      => ['space' => 'none'],
            'binary_operator_spaces'                           => ['default' => null, 'operators' => ['=' => 'align_single_space_minimal', '=>' => 'align_single_space_minimal']],
            'no_unused_imports'                                => true,
            'ordered_imports'                                  => ['sort_algorithm' => 'alpha', 'imports_order' => ['const', 'class', 'function']],
            'control_structure_braces'                         => true,
            'control_structure_continuation_position'          => true,
            'date_time_create_from_format_call'                => true,
            'date_time_immutable'                              => true,
            'nullable_type_declaration_for_default_null_value' => true,
            'phpdoc_line_span'                                 => ['const' => 'single', 'method' => 'single', 'property' => 'single'],
            'simplified_null_return'                           => true,
            'statement_indentation'                            => true,
            // NOT SURE ABOUT THESE…
            'simplified_if_return'                             => true,
            'final_class'                                      => true,
        ]
    )
    ->setFinder($finder);

return $config;

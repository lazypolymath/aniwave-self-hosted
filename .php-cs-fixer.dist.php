<?php

use PhpCsFixer\Finder;

$finder = Finder::create()
    ->notPath([
        'vendor',
        'public',
        'storage',
        'bootstrap/cache',
    ])
    ->ignoreVCS(true)
    ->in(__DIR__);

return (new PhpCsFixer\Config)
    ->setRules([
        '@PSR12' => true,
        'static_lambda' => true,
        'no_unused_imports' => true,
        'simplified_if_return' => true,
        'normalize_index_brace' => true,
        'simplified_null_return' => true,
        'single_trait_insert_per_statement' => false,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sort_algorithm' => 'length'],
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
        'new_with_parentheses' => ['anonymous_class' => false, 'named_class' => false],
        'braces_position' => [
            'classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
            'anonymous_classes_opening_brace' => 'next_line_unless_newline_at_signature_end',
        ],
    ])
    ->setFinder($finder)
    ->setRiskyAllowed(true);

<?php

namespace Spatie\FilamentMarkdownEditor;

use Filament\Forms\Components\Concerns;
use Filament\Support\Concerns\HasExtraAlpineAttributes;
use Filament\Forms\Components\Field;

class MarkdownEditor extends Field
{
    use Concerns\CanBeLengthConstrained;
    use Concerns\HasExtraInputAttributes;
    use Concerns\HasPlaceholder;
    use Concerns\InteractsWithToolbarButtons;
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-markdown-editor::markdownField';
}

<?php

namespace Bdigital\ElementalTabset;

class TabSetElement extends \DNADesign\Elemental\Models\BaseElement {

    private static $table_name = 'bdigital_tabset';

    private static $singular_name = 'TabsetElement';

    private static $plural_name = 'TabsetElements';

    private static $description = 'Creates a Bootstrap 5 Tabset';

    /**
     * @var string
     */
    private static $icon = 'font-icon-block-content';

    private static $db = [
        'Title' => 'Varchar'
    ];

    public function getSummary(): string
    {
        return "hello";
    }

    public function getType()
    {
        return 'Tabset';
    }


}

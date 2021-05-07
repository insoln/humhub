<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2021 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\space\widgets;

use humhub\components\Widget;
use humhub\modules\space\models\Space;

/**
 * SpacesIcons shows footer icons for spaces cards
 * 
 * @since 1.9
 * @author Luke
 */
class SpacesIcons extends Widget
{

    /**
     * @var Space
     */
    public $space;

    /**
     * @inheritdoc
     */
    public function run()
    {
        return $this->render('spacesIcons', [
            'space' => $this->space
        ]);
    }

}

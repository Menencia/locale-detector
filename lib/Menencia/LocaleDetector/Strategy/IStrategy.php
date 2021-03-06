<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lucien
 * Date: 28/08/13
 * Time: 16:42
 * To change this template use File | Settings | File Templates.
 */

namespace Menencia\LocaleDetector\Strategy;

interface IStrategy {

    /**
     * @return String
     */
    public function getName();

    /**
     * @return \Locale
     */
    public function detect();

}
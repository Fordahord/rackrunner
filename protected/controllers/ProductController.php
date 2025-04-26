<?php

class ProductController extends Controller
{

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
        );
    }

    public function actionCatalogue()
    {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('/site/login'));
        }

        $this->render('catalogue');
    }

}

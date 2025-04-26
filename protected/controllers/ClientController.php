<?php

class ClientController extends Controller
{

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
        );
    }

    public function actionDashboard()
    {
        if (Yii::app()->user->isGuest) {
            $this->redirect(array('/site/login'));
        }

        $product_count = Product::model()->count();

        $this->render('dashboard', array(
            'product_count' => $product_count,
        ));
    }

}

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

        $top_products = Product::model()->findAll(array(
            'order' => 'quantity DESC',
            'limit' => 5,
        ));

        $top_product_labels = array_map(function ($name) {
            return $name->name;
        }, $top_products);

        $top_products_values = array_map(function ($name) {
            return $name->quantity;
        }, $top_products);

        $this->render('dashboard', array(
            'product_count'      => $product_count,
            'top_products'       => $top_products,
            'top_product_labels' => $top_product_labels,
            'top_product_values' => $top_products_values,
        ));
    }

}

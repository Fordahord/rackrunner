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

        $products = Product::model()->findAll();

        $this->render('catalogue', array(
            'products' => $products,
        ));
    }

    public function actionCreate()
    {
        $model = new Product;

        if (isset($_POST['Product'])) {
            // Create product
            $model->attributes = $_POST['Product'];
            $image             = CUploadedFile::getInstance($model, 'image_path');

            if ($image) {
                $filename      = uniqid() . '.' . strtolower($image->getExtensionName());
                $relative_path = 'products/images/' . $filename;
                $absolute_path = '/var/www/rackrunner.co.uk/' . $relative_path;

                if ($image->saveAs($absolute_path)) {
                    $model->image_path = $relative_path;
                }
            }

            $model->save(false);
            $this->redirect(array('catalogue'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

}

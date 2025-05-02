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

            $model->save();
            $this->redirect(array('catalogue'));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Delete pointed product
     *
     * @param type $id
     */
    public function actionDelete($id)
    {
        $model = Product::model()->findByPk($id);

        if (!empty($model->image_path)) {
            $absolute_path = '/var/www/rackrunner.co.uk/' . $model->image_path;
            if (file_exists($absolute_path)) {
                unlink($absolute_path);
            }
        }

        $model->delete();

        $this->redirect(array('catalogue'));
    }

    public function actionUpdate($id)
    {
        $model = Product::model()->findByPk($id);

        $old_image_path = $model->image_path;

        if (isset($_POST['Product'])) {
            $model->attributes = $_POST['Product'];

            $image = CUploadedFile::getInstance($model, 'image_path');

            if ($image) {
                $filename      = uniqid() . '.' . strtolower($image->getExtensionName());
                $relative_path = 'products/images/' . $filename;
                $absolute_path = '/var/www/rackrunner.co.uk/' . $relative_path;

                if ($image->saveAs($absolute_path)) {
                    if (!empty($old_image_path)) {
                        $old_absolute_path = '/var/www/rackrunner.co.uk/' . $old_image_path;
                        if (file_exists($old_absolute_path)) {
                            unlink($old_absolute_path);
                        }
                    }

                    $model->image_path = $relative_path;
                } else {
                    $model->image_path = $old_image_path;
                }
            } else {
                $model->image_path = $old_image_path;
            }

            $model->save();
            $this->redirect(array('catalogue'));
        }

        $this->render('create', array('model' => $model));
    }

}

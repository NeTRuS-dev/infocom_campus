<?php

namespace app\controllers;

use Yii;
use yii\bootstrap4\LinkPager;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\db\Query;
use yii\web\Controller;
use yii\web\Response;


class SiteController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query = (new Query())->from('lecture_audience');
        $provider = new ActiveDataProvider([
            'db' => Yii::$app->db,
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index', [
            'data_provider' => $provider,
        ]);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionBuildingsList()
    {
        $query = (new Query())->from('buildings_list');
        $provider = new ActiveDataProvider([
            'db' => Yii::$app->db,
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index', [
            'data_provider' => $provider,
        ]);
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionHierarchicalList()
    {
        $query = (new Query())->from('hierarchical_list');
        $provider = new ActiveDataProvider([
            'db' => Yii::$app->db,
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);
        return $this->render('index', [
            'data_provider' => $provider,
        ]);
    }

}

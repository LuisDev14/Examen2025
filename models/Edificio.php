<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificios".
 *
 * @property int $id
 * @property string $nombre
 * @property int $numero
 * @property string|null $letra_interior
 * @property float $latitud
 * @property float $longitud
 */
class Edificio extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'edificios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['letra_interior'], 'default', 'value' => null],
            [['nombre', 'numero', 'latitud', 'longitud'], 'required'],
            [['numero'], 'integer'],
            [['latitud', 'longitud'], 'number'],
            [['nombre'], 'string', 'max' => 255],
            [['letra_interior'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'numero' => 'Numero',
            'letra_interior' => 'Letra Interior',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
        ];
    }

}

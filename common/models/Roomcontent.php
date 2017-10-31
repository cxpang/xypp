<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "roomcontent".
 *
 * @property integer $roomcontentid
 * @property string $contenttext
 * @property integer $uid
 * @property integer $roomid
 * @property string $createtime
 */
class Roomcontent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'roomcontent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenttext', 'uid', 'roomid', 'createtime'], 'required'],
            [['uid', 'roomid'], 'integer'],
            [['contenttext'], 'string', 'max' => 255],
            [['createtime'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'roomcontentid' => 'Roomcontentid',
            'contenttext' => 'Contenttext',
            'uid' => 'Uid',
            'roomid' => 'Roomid',
            'createtime' => 'Createtime',
        ];
    }
}

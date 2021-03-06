[![Build Status](https://travis-ci.org/sateler/yii2-rut.svg?branch=master)](https://travis-ci.org/sateler/yii2-rut)

# Rut Formatting

Load the behavior in the `config/web.php`:


    'formatter' => [
        'class' => \yii\i18n\Formatter::className(),
        'as rutFormatter' => \sateler\rut\RutFormatBehavior::className(),
    ],

Or if you use another formatter class, add the behavior:

    public function behaviors() {
        return [ \sateler\rut\RutFormatBehavior::className() ];
    }


Then you can use `Yii::$app->formatter->asRut()`, or specify the `rut` format in `GridView` or `DetailView`.

# Rut Validator

In your model rules, add:

    ['property', \sateler\rut\RutValidator::className()]
    
# Rut Widget

To format input data in textInputs, in your app assets, add:

    public $depends = [
        ...,
        'sateler\rut\RutWidgetAsset',
    ];

And activate the text input using:

    $form->field($model, "rut")->textInput(['data-rut' => 'true'])

# Upgrade from 1.x to 2.x:

Just replace references to `RutValidator::trimValue($value)` to the new function `Rut::normalize($value)`

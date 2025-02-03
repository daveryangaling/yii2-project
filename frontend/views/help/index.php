<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="help-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
    Praesent mattis in neque non porta. Donec orci libero, ullamcorper id urna in, vehicula rhoncus sapien. Etiam iaculis justo ac ullamcorper elementum. Pellentesque eros nisl, mattis posuere enim a, pellentesque aliquet nisi. Vivamus vehicula velit at eros mattis, vel molestie velit ultricies. Nulla enim tortor, auctor sit amet porta vitae, tempus pharetra lorem. Suspendisse quis ante risus. Nam eget laoreet dui. Integer finibus, ex vitae sollicitudin viverra, ipsum ante lacinia est, in dictum erat metus in lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla posuere sollicitudin. Quisque ac erat eu tellus tristique luctus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    Phasellus ullamcorper semper sapien, mattis facilisis sapien mattis id. Phasellus lobortis vehicula varius. Etiam id interdum tortor. Aliquam urna nulla, placerat eu maximus sit amet, sollicitudin vel ex. Aliquam at pulvinar justo. Integer urna est, placerat in dolor at, lacinia venenatis nisi. Vivamus urna tellus, mollis non cursus eu, mollis sit amet purus. Cras in magna a lacus dignissim fermentum. Vestibulum ullamcorper, risus ut sollicitudin pretium, sem enim ullamcorper nisi, et molestie nisi sapien et tortor. Mauris sollicitudin faucibus venenatis. 
    </p>

    <div>
    <?= Html::a('Account Settings', ['/help/account-settings'])?>
    </div>
    
    <div>
    <?= Html::a('Login and Security', ['/help/login-and-security'])?>
    </div>
    
    <div>
    <?= Html::a('Privacy', ['/help/privacy'])?>
    </div>
    
</div>
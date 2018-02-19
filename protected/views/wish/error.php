<?php
	$this->pageTitle	=	Yii::app()->name . ' - Error ';
?>
<div class="error-container">

            <div class="error-code"><?=CHtml::encode($code); ?></div>
<!--            <div class="error-text">page not found</div>-->
            <div class="error-subtext">Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below.</div>

            <?php
				if(YII_DEBUG)
				{
			?>
            <div class=""><?php echo '<pre  style="text-align: center; font-size: 20px; font-weight: bolder; color: red; font-family: \'Imprint MT Shadow\'">'; print_r($type); echo '</pre>'; ?></div>
            <div class=""><?php echo '<pre>'; print_r($message); echo '</pre>'; ?></div>
            <div class=""><?php echo '<pre>'; print_r($file); echo '</pre>'; ?></div>
            <div class=""><?php echo '<pre>'; echo "Line No : "; print_r($line); echo '</pre>'; ?></div>
<!--            <div class="">--><?php //echo '<pre>'; print_r($trace); echo '</pre>'; ?><!--</div>-->
            <?php
				}
			?>
            <div class="error-actions">                                
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block btn-lg" onClick="document.location.href = 'index.php';">Back to dashboard</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-block btn-lg" onClick="history.back();">Previous page</button>
                    </div>
                </div>                                
            </div>
            <div class="error-subtext">Or Contact Administrator to fix Error.</div>
        </div>
<style>
    .error-container {
        margin: 50px auto 0;
        width: 90%;
    }
</style>
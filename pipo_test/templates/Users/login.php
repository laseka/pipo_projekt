<div class="index columns">
        <div class="panel">
            <h2 class="text-center"> Login </h2>
            <?= $this->Form->create(); ?>
                <?= $this->Form->input('username');?><br>
                <?= $this->Form->input('password', array('type' => 'password'));?>
                <!-- <?= $this->Form->input('password');?> -->
                <?= $this->Form->submit('Login', array('class' => 'button'));?> 

            <?= $this->Form->end();?>
        </div>
</div>
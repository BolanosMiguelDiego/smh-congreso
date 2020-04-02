<div class="contact-contact">
    <div class="main-contact">
        <h3>contact</h3>
        <p>que te podemos ayudar</p>
        <div class="contact-form">
            {!!Form::open()!!}
            <div class="col-md-6 contact-left">
                {!!Form::text('name',null,['placeholder' => 'nombre'])!!}
                {!!Form::text('email',null,['placeholder' => 'Email'])!!}
            </div>
            <div class="col-md-6 contact-right">
                {!!Form::textarea('mensaje',null,['placeholder' => 'Mensaje'])!!}
            </div>
            {!!Form::submit(SEND)!!}
            {!!Fomr::close()!!}
        </div>
    </div>
</div>
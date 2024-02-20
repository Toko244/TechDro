

<div class="form-group">
    {{ Form::label($key,  trans('admin.'.$key),  ['class' => 'control-label iconify', 'data-icon' => "-"]) }}

        <div class="row tab-pane">
          <div class="toggle-button-cover">
              <div class="button r" id="button-1">
                <input type="hidden" class="checkbox" name="{{$key}}" value="0"/>
                <input type="checkbox" class="checkbox" name="{{$key}}" value="1"/>
                <div class="knobs"></div>
                <div class="layer"></div>
              </div>
          </div>
        </div>
</div>


<style>
    .button-cover,
    .knobs,
    .layer {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    }

    .button {
        position: relative;
    top: 50%;
    width: 110px;
    height: 36px;
    margin: -10px auto 0 9px;
    overflow: hidden;
    }

    .button.b2 {
    border-radius: 2px;
    }

    .checkbox {
    position: relative;
    width: 100%;
    height: 100%;
    padding: 0;
    margin: 0;
    opacity: 0;
    cursor: pointer;
    z-index: 3;
    }

    .knobs {
    z-index: 2;
    }

    .layer {
    width: 100%;
    background-color: #ebf7fc;
    transition: 0.3s ease all;
    z-index: 1;
    }

    /* Button 1 */
    #button-1 .knobs:before {
    content: "ON SITE";
    position: absolute;
    top: 4px;
    left: 4px;
    width: 65px;
    height: 28px;
    color: #fff;
    font-size: 10px;
    font-weight: bold;
    text-align: center;
    line-height: 1;
    padding: 9px 4px;
    background-color: #f44336;
    border-radius: 10%;
    transition: 0.3s cubic-bezier(0.18, 0.89, 0.35, 1.15) all;
    }

    #button-1 .checkbox:checked + .knobs:before {
        content: "BLANK";
    left: 42px;
    background-color: #03a9f4;
    }

    #button-1 .checkbox:checked ~ .layer {
    background-color: #fcebeb;
    }

    #button-1 .knobs,
    #button-1 .knobs:before,
    #button-1 .layer {
    transition: 0.3s ease all;
    }

</style>



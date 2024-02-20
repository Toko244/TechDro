
<div class="contact-form section-pad" style="background: #F3F5F6;">
   <div class="container">
       <div class="form-info">
           <div class="title bold black text-2xl mb-1">
            {{$component->translate(app()->getlocale())->title}}
           </div>

           <div class="text medium black text-lg">
            {!! $component->translate(app()->getlocale())->desc !!}
           </div>
       </div>

       <div class="form">
           <form method="post">
               {{ csrf_field() }}
               <div class="row">
                   <input type="hidden" class="w-full pl-1" style="height: 50px;" name="post_id" value="{{ $component->id }}">
                   <div class="col-xl-6 flex wrap">
                       <div class="flex column items-start w-1_2 pr-1">
                           <label for="" class="semibold text-lg mb-1 required"
                               style="color: #656C69;">{{ trans('website.name') }}</label>
                           <input type="text" class="w-full pl-1" style="height: 50px;" name="name" required>
                       </div>

                       <div class="flex column items-start w-1_2 pl-1">
                           <label for="" class="semibold text-lg mb-1 required"
                               style="color: #656C69;">{{ trans('website.email') }}</label>
                           <input type="email" class="w-full pl-1" style="height: 50px;" name="email" required>
                       </div>

                       <div class="flex column items-start w-1_2 pr-1">
                           <label for="" class="semibold text-lg mb-1"
                               style="color: #656C69;">{{ trans('website.phone') }}</label>
                           <input type="text" class="w-full pl-1" style="height: 50px;" name="phone">
                       </div>

                       <div class="flex column items-start w-1_2 pl-1">
                           <label for="" class="semibold text-lg mb-1"
                               style="color: #656C69;">{{ trans('website.subject') }}</label>
                           <input type="text" class="w-full pl-1" style="height: 50px;" name="subject">
                       </div>
                   </div>

                   <div class="col-xl-6">
                       <div class="textarea w-full h-full pl-1 pad-l-contact_01">
                           <label for="" class="semibold text-lg required"
                               style="color: #656C69;">{{ trans('website.text') }}</label>
                           <textarea name="text" id="" cols="30" rows="10" class="w-full mt-1 pt-1 pl-1 pr-1 pb-1" required></textarea>
                       </div>
                   </div>

                   <div class="w-full flex items-center justify-end">
                       <button type="submit"
                           class="flex items-center justify-center white bold text-lg submit-button transition-duration  ka-font-nino">{{ trans('website.send') }}</button>
                   </div>
               </div>
           </form>
       </div>
   </div>
</div>

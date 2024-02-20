
let uniques = [];

generate = () => {
    let uniq = ''
    do {
        uniq = Date.now().toString(16)
    } while(uniques.indexOf(uniq) !== -1)

    uniques.push(uniq)

    return uniq
}

$.fn.formFields = function() {
    let data = $(this).data()

    let { container, types, langs, hasOptions} = data

    let createOpts = (prefix, el = null) => {
        let idd = generate();

        let opts = el
            ? el
            : $(`
                <div class="opts" data-prefix="${prefix}">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" class="form-options" href="#panel-${idd}">${
                                currentLocale === 'ka' ? 'პარამეტრები' : 'Options'
                            }</a>
                            </h4>
                        </div>
                        <div id="panel-${idd}" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="wrap"></div>
                                <div class="text-right">
                                    <button class="btn btn-warning" type="button">${
                                    currentLocale === 'ka' ? 'პარამეტრის დამატება' : 'Add Options'
                                }</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `);
        opts.find('.wrap').children().each(function () {
            let item = $(this);
            item.find('.glyphicon-trash').click((e) => {
                e.preventDefault();
                item.next('hr').remove();
                item.remove();
            });
        });

        opts.find('button').click((e) => {
            let id = generate();
            e.preventDefault();

            let item = $(`
                <div class="row form-group">
                    <div class="col col-sm-12 text-right">
                        <a href="#" class="glyphicon glyphicon-trash text-danger mdi mdi-delete"></a>
                    </div>
                    ${langs
                        .map(
                            (item) => `
                                <div class="col col-xs-6">
                                    <label>${
                                        item.v === 'ka'
                                            ? 'პარამეტრების დასახელება'
                                            : 'Options Title'
                                    }</label>
                                    <input name="${prefix}[options][${id}][${item.v}][name]" class="form-control" style="margin:0;"/>
                                </div>
                            `
                        )
                        .join('\n')}
                </div>
                <hr>
            `);

            item.find('.glyphicon-trash').click((e) => {
                e.preventDefault();
                item.next('hr').remove();
                item.remove();
            });

            opts.find('.wrap').append(item);
        });

        return opts;
    };

    $(`#${container} .opts`).each(function() {
        let prefix = $(this).closest('.panel-body').find('select').attr('name').split('[')
        prefix.pop()
        prefix = prefix.join('[')
        createOpts(prefix, $(this))
    })

    let optionsFunction = function() {
        let $this = $(this)
        let prefix = $(this).attr('name').split('[')
        prefix.pop()
        prefix = prefix.join('[')


        if(hasOptions.indexOf(parseInt($this.val())) !== -1) {
            if(!$this.closest('.panel-body').find('.opts').length && !$this.data('options')) {
                $this.closest('.panel-body').append(createOpts(prefix))
            } else if($this.data('options')) {
                $this.closest('.panel-body').append(createOpts(prefix, $this.data('options')))
            }

        } else  if($this.closest('.panel-body').find('.opts').length){
            $this.data('options', $this.closest('.panel-body').find('.opts').clone())
            $this.closest('.panel-body').find('.opts').remove()
        }
    }

    $(`#${container}`).sortable({
        update: (e, ui) => {
            console.log('u')
            $(e.target).children().each(function(index) {
                $(this).find('.sortField').val((index + 1))
            })
        }
    })

    $(`#${container}`).children().each(function() {
        let html = $(this)

        html.find('.name-field').keyup(function() {
            let el = html.find(`span[data-lang-show="${$(this).closest('[data-lang-show]').data('lang-show')}"]`);
            let value = $(this).val() ? $(this).val() : '---'
            el.text(`${value} (${el.text().split('(').pop()}`)
        })

        // html.find('[data-lang-show]').not(`[data-lang-show="${$(`li.active [data-toggle=tab]`).attr('href')}"]`).hide()

        html.find('.glyphicon-remove').click((e) => {
            e.preventDefault()
            if(confirm('Are you sure?')) {
                html.remove()
            }
        })

        html.find('[name*=type_id]').change(optionsFunction).change()


    })

    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href")
        // $('[data-lang-show]').fadeOut('fast', () => {
        //     $('[data-lang-show]').not(`[data-lang-show="${target}"]`).hide()
        //     $(`[data-lang-show="${target}"]`).fadeIn('fast');
        // })
        // $('[data-lang-show]').hide()
        $(`[data-lang-show="${target}"]`).show()
    });

    $(this).click(function() {
        let uid = generate()

        let html = $(`
        <div class="panel panel-default">
            <input type="hidden" name="n_fields[${uid}][sort]" class="sortField" value="${($(`#${container}`).children().length + 1)}"/>
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="${uid}">
                    <span>${currentLocale === 'ka' ? 'შექმენი ფორმა' : 'Create Form'}</span>
                    </a>
                    <a href="#" class="text-danger glyphicon glyphicon-remove pull-right"></a>
                </h4>
            </div>
            <div id="${uid}" class="panel-collapse collapse">
                <div class="panel-body">
                    <div class="row form-group">
                        <div class="col col-sm-6">
                        ${langs.map((item) => `
                        <div data-lang-show="#lang-${item.id}" style="margin-top:15px;">
                            <label>${item.v === 'ka' ? 'დასახელება' : 'Title'}</label>
                            <input type="text" name="n_fields[${uid}][${item.v}][form_title]" class="form-control name-field" />
                        </div>
                    `).join('\n')}
                        </div>
                        <div class="col col-sm-6" style="margin-top:15px;">
                            <label>${currentLocale === 'ka' ? 'ტიპები' : 'Form Type'}</label>
                            <select class="form-control" name="n_fields[${uid}][type_id]">
                                ${types.map((type) => `<option value="${type.id}">${type.v}</option>`).join('\n')}
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="middle">
                            <div class="switch small-switch">
                                <input type="hidden" name="n_fields[${uid}][validation][unique]" value="0">
                                <input type="checkbox" name="n_fields[${uid}][validation][unique]" value="1">
                                <div class="slider round"></div>
                            </div>
                            <span>${currentLocale === 'ka' ? 'უნიკალური' : 'unique'}</span>
                        </label>
                        <label class="middle" style="margin-left:20px;">
                            <div class="switch small-switch">
                                <input type="hidden" name="n_fields[${uid}][validation][required]" value="0">
                                <input type="checkbox" name="n_fields[${uid}][validation][required]" value="1">
                                <div class="slider round"></div>
                            </div>
                            <span>${currentLocale === 'ka' ? 'სავალდებულო' : 'required'}</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        `)

        html.find('.name-field').keyup(function() {
            let el = html.find(`span[data-lang-show="${$(this).closest('[data-lang-show]').data('lang-show')}"]`);
            let value = $(this).val() ? $(this).val() : '---'
            el.text(`${value} (${el.text().split('(').pop()}`)
        })

        // html.find('[data-lang-show]').not(`[data-lang-show="${$(`li.active [data-toggle=tab]`).attr('href')}"]`).hide()

        html.find('.glyphicon-remove').click((e) => {
            e.preventDefault()
            if(confirm('Are you sure?')) {
                html.remove()
            }
        })

        html.find('[name*=type_id]').change(optionsFunction)


        $(`#${container}`).append(html)

    })

}
$(document).on( 'click', '.panel-title', function () {

    let toggleId = $(this).find('a').data('toggle');
    $("#"+toggleId).toggleClass('collapse');
});

<x-admin title="الاسئله">
    <x-slot name="breadcrumbs">
        <x-bread-crumbs title="الاسئله">

        </x-bread-crumbs>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic"> انشاء /تعديل سؤال </h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collpase show">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('settings.store') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">السؤال
                                                    بالعربى </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput1" class="form-control"
                                                        placeholder="السؤال بالعربى" name="setting_title_ar"
                                                        value="{{ old('setting_title_ar', $setting->title_ar ?? null) }}">
                                                    <x-form.validation name='setting_title_ar' />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">السؤال
                                                    بالانجليزيه </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="projectinput1" class="form-control"
                                                        placeholder="السؤال بالانجليزيه" name="setting_title_en"
                                                        value="{{ old('setting_title_en', $setting->title_en ?? null) }}">
                                                    <x-form.validation name='setting_title_en' />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">الاجابه
                                                    بالعربيه</label>
                                                <div class="col-md-9">
                                                    <textarea id="editor_ar" class="form-control" placeholder="الاجابه بالعربيه" name="setting_content_ar">
                                                                {{ old('setting_content_ar', $setting->content_ar ?? null) }}</textarea>
                                                    <x-form.validation name='setting_content_ar' />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 label-control" for="projectinput1">الاجابه
                                                    بالانجليزيه</label>
                                                <div class="col-md-9">
                                                    <textarea id="editor_en" class="form-control" placeholder="الاجابه بالانجليزيه" name="setting_content_en">
                                                                {{ old('setting_content_en', $setting->content_en ?? null) }}</textarea>
                                                    <x-form.validation name='setting_content_en' />

                                                </div>
                                            </div>

                                        </div>

                                        <input type="hidden" id="type" name="type" class="form-control"
                                            value="fqa">
                                        <input type="hidden" name="setting_id" class="form-control"
                                            value="{{ old('setting_id', $setting->id ?? null) }}">

                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="button" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> الغاء
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> حفظ
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-admin>

<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet" />

<div class="row">
    <div class="col-12">
        <fieldset id="steps-uid-0-p-2" role="tabpanel" aria-labelledby="steps-uid-0-h-2" class="body current" aria-hidden="false" style="">
            <form action="" method="post"> @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="project_name">Project Name :</label>
                            <input type="text" class="form-control" value="@php echo isset($editData->project_name) ? $editData->project_name : '' @endphp" name="project_name" id="project_name" required>
                        </div>
                        <div class="form-group">
                            <label for="project_location">Project Location:</label>
                            <input type="text" class="form-control" value="@php echo isset($editData->project_location) ? $editData->project_location : '' @endphp" name="project_location" id="project_location" required>
                        </div>
                        <div class="form-group">
                            <label for="area">Project size ( in sq feet )</label>
                            <input type="number" class="form-control" value="@php echo isset($editData->area) ? $editData->area : '' @endphp" name="area" id="area" required>
                        </div>
                        <div class="form-group">
                            <label for="project_date">Project Date</label>
                            <input type="date" class="form-control" value="@php echo isset($editData->project_date) ? $editData->project_date : '' @endphp" name="project_date" id="project_date" required>
                        </div>
                        <div class="form-group">
                            <label for="estimate">Estimate</label>
                            <input type="text" class="form-control" value="@php echo isset($editData->estimate) ? $editData->estimate : '' @endphp" name="estimate" id="estimate" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="jobtitle">Project Description</label>
                            <input type="hidden" name="description" id="description">
                            <div id="editor" style="height:230px;">@php echo isset($editData->description) ? $editData->description : '' @endphp</div>
                        </div>
                        <div class="form-group">
                            <label for="project_head">Project Head</label>
                            <input type="text" class="form-control" value="@php echo isset($editData->project_head) ? $editData->project_head : '' @endphp" name="project_head" id="head" required>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <div class="col-6">
                            <button submit class=" btn btn-block btn-primary">Save Project</button>
                        </div>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
</div>



<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    const quill = new Quill('#editor', {
        theme: 'snow'
        , placeholder: 'Compose an epic...'
    , });

    quill.on('text-change', (delta, oldDelta, source) => {
        var html = quill.root.innerHTML;
        $('#description').val(`${html}`);
    });

    var html = quill.root.innerHTML;
    $('#description').val(`${html}`);

</script>

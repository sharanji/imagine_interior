<div class="row">

    <div class="col-md-12 my-2">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Location</th>
                        <th scope="col">Project Head</th>
                        <th scope="col">Project Date</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $item)
                    <tr>
                        <th scope="row">{{$item->project_name}}</th>
                        <td>{{$item->project_location}}</td>
                        <td>{{$item->project_head}}</td>
                        <td>{{$item->project_date}}</td>
                        <td>
                            <a href="{{url('manage-projects.html/view/'.$item->project_id)}}" class="btn btn-success">View</a>
                            <div class="btn btn-danger">Delete</div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

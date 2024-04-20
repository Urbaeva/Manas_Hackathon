
    <div class="tab-pane fade" id="manage-contact" role="tabpanel">
        <form action="{{route('post.addDocument', $post->id)}}" method="POST">
            @csrf
        @foreach($documents as $document)
            <div class="checkbox-wrapper-16From">
                <div class="card">

                    <label class="checkbox-wrapper">
                        <input class="checkbox-input" type="checkbox" name="{{$document->id}}" value="1" {{in_array($document->id, $requirements) ? 'checked': ''}}>
                        <span class="checkbox-tile">

                    <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                        <h4 class="card-title">{{$document->name}}</h4>
                      </div>
                    </div>
                    <div class="card-body">
                      <h6 class="card-title">{{$document->description}}</h6>
                    </div>

</span>
                    </label>
                </div>
            </div>
        @endforeach
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>



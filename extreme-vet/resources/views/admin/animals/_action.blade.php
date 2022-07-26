@can('edit_animal')
    <a class="btn btn-primary btn-sm" href="{{route('admin.animals.edit',$animal['id'])}}">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
@endcan

@can('delete_animal')
    <form method="POST" action="{{route('admin.animals.destroy',$animal['id'])}}" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_animal">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan
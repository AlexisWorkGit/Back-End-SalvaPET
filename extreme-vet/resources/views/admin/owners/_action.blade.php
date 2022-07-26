@can('edit_owner')
    <a class="btn btn-primary btn-sm" href="{{route('admin.owners.edit',$owner['id'])}}">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
@endcan

@can('delete_owner')
    <form method="POST" action="{{route('admin.owners.destroy',$owner['id'])}}" class="d-inline">
        <input type="hidden" name="_method" value="delete">
        <button type="submit" class="btn btn-danger btn-sm delete_owner">
            <i class="fa fa-trash"></i>
        </button>
    </form>
@endcan
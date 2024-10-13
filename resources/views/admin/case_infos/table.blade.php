<div class="table-responsive p-3">
    <table class="table" id="caseInfos-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>職業</th>
                <th>名稱</th>
                <th>案例標題</th>
                <th>案例內容</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($caseInfos as $caseInfo)
                <tr>
                    <td>{{ $caseInfo->id }}</td>
                    <td width="120">{{ $caseInfo->occupation }}</td>
                    <td width="120">{{ $caseInfo->name }}</td>
                    <td width="120">{{ $caseInfo->case_title }}</td>
                    <td>{{ $caseInfo->case_content }}</td>
                    <td width="120">
                        {!! Form::open(['route' => ['admin.caseInfos.destroy', $caseInfo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            {{-- <a href="{{ route('admin.caseInfos.show', [$caseInfo->id]) }}" class='btn btn-default btn-sm'>
                                <i class="far fa-eye"></i>
                            </a> --}}
                            <a href="{{ route('admin.caseInfos.edit', [$caseInfo->id]) }}"
                                class='btn btn-default btn-sm'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-sm',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

 <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $datas->id }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->phone }}</td>
                        <td>
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
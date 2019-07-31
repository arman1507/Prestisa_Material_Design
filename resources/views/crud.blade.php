 <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Gender</th>
                    <th>type</th>
                    <th>refcode</th>
                    <th>Company Type</th>
                    <th>Company Name</th>
                    <th>Company Address</th>
                    <th>Company Email</th>
                    <th>Company Phone</th>
                    <th>Point</th>


                </tr>
                </thead>
                <tbody>
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $datas->id }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->phone }}</td>
                        <td>{{ $datas->gender }}</td>
                        <td>{{ $datas->refcode }}</td>
                        <td>{{ $datas->company_type }}</td>
                        <td>{{ $datas->company_name }}</td>
                        <td>{{ $datas->company_address }}</td>
                        <td>{{ $datas->company_email }}</td>
                        <td>{{ $datas-> company_phone }}</td>
                        <td>
                        
                            
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
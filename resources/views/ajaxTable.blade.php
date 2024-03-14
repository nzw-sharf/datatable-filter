@php
    $output = '';
    $output .= ' <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Type</th>
                                    <th>Bedroom</th>
                                    <th>Bathroom</th>
                                    <th>Portals</th>
                                </tr>
                            </thead>
                            <tbody>';

    foreach ($data as $list) {
        $output .=
            ' <tr>
                                        <td>' .
            $list->id .
            '</td>
                                        <td>' .
            $list->title .
            '</td>
                                        <td>' .
            $list->description .
            '</td>
                                        <td>' .
            $list->price .
            '</td>
                                        <td>' .
            $list->type .
            '</td>
                                        <td>' .
            $list->bedroom->name .
            '</td>
                                        <td>' .
            $list->bathroom->name .
            '</td>
                                        <td>' .
            $list->portals->implode('name', ', ') .
            '</td>
                                    </tr>';
    }
    $output .= '  </tbody>
                            <tbody>
                            </tbody>
                        </table>';
    echo $output;
@endphp

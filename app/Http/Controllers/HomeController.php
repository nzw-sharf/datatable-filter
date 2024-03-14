<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getFilterValue($query, $filter)
    {
        $field = $filter['column'];
        $operator = $filter['operator'];
        $val = $filter['val'];

        switch ($operator) {
            case '$eq':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {

                    return  $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', $val);
                    });
                } else {
                    return $query->where($field, $val);
                }

                break;
            case '$eqc':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereRaw("BINARY(name)= ?", $val);
                    });
                } else {
                    return $query->whereRaw("BINARY `{$field}`= ?", [$val]);
                }
                break;

            case '$ne':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereNot('name', $val);
                    });
                } else {
                    return $query->whereNot($field, $val);
                }
                break;

            case '$lt':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', '<', $val);
                    });
                } else {
                    return $query->where($field, '<', $val);
                }
                break;

            case '$lte':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return     $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', '<=', $val);
                    });
                } else {
                    return  $query->where($field, '<=', $val);
                }
                break;

            case '$gt':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', '>', $val);
                    });
                } else {
                    return  $query->where($field, '>', $val);
                }
                break;
            case '$gte':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', '>=', $val);
                    });
                } else {
                    return  $query->where($field, '>=', $val);
                }
                break;
            case '$in':
                if (!is_array($val)) {
                    $val = array_values(explode(",", $val));
                    // dd($val);
                }
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereIn('name', $val);
                    });
                } else {
                    return  $query->whereIn($field, $val);
                }
                break;

            case '$notIn':
                if (!is_array($val)) {
                    $val = array_values(explode(",", $val));
                }
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return   $query->whereHas($field, function ($query) use ($val) {
                        $query->whereNotIn('name', $val);
                    });
                } else {
                    return $query->whereNotIn($field, $val);
                }
                break;

            case '$contains':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name',  'like', "%{$val}%");
                    });
                } else {
                    return $query->where($field, 'like', "%{$val}%");
                }
                break;

            case '$notContains':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', 'not like', "%{$val}%");
                    });
                } else {
                    return $query->where($field, 'not like', "%{$val}%");
                }
                break;

            case '$containsc':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereRaw("BINARY(name) like ?", ["%{$val}%"]);
                    });
                } else {
                    return  $query->whereRaw("BINARY `{$field}` like ?", ["%{$val}%"]);
                }
                break;
            case '$notContainsc':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereRaw("BINARY(name) not like ?", ["%{$val}%"]);
                    });
                } else {
                    return $query->whereRaw("BINARY `{$field}` not like ?", ["%{$val}%"]);
                }
                break;
            case '$null':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereNull('name');
                    });
                } else {
                    return $query->whereNull($field);
                }
                break;
            case '$notNull':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return     $query->whereHas($field, function ($query) use ($val) {
                        $query->whereNotNull('name');
                    });
                } else {
                    return $query->whereNotNull($field);
                }
                break;
            case '$between':
                if (!is_array($val)) {
                    $val = array_values(explode(",", $val));
                }
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereBetween('name', $val);
                    });
                } else {
                    return  $query->whereBetween($field, $val);
                }
                break;
            case '$startsWith':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', 'like', $val . '%');
                    });
                } else {
                    return $query->where($field, 'like', $val . '%');
                }
                break;
            case '$startsWithc':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereRaw("BINARY(name) like ?", $val . '%');
                    });
                } else {
                    return $query->whereRaw("BINARY `{$field}` like ?", $val . '%');
                }
                break;
            case '$endsWith':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->where('name', 'like', '%' . $val);
                    });
                } else {
                    return $query->where($field, 'like', '%' . $val);
                }
                break;

            case '$endsWithc':
                if ($field == "portals" || $field == "bedroom" || $field == "bathroom") {
                    return    $query->whereHas($field, function ($query) use ($val) {
                        $query->whereRaw("BINARY(name) like ?", '%' . $val);
                    });
                } else {
                    return   $query->whereRaw("BINARY `{$field}` like ?", '%' . $val);
                }
                break;

            default:
                # code...
                break;
        }
    }
    public function home(Request $request)
    {
        $columns = Schema::getColumnListing('listings');
        if ($request->ajax()) {
            $collection = Listing::query();
            // /dd($collection);
            if (!empty($request->get('filter'))) {
                $filters = $request->get('filter');
                foreach ($filters as $key => $filter) {
                    $collection = $this->getFilterValue($collection, $filter);
                }
            }
            $data = $collection->latest()->get();

            $html = view('ajaxTable', compact('data'))->render();

            return response()->json(['success' => true, 'html' => $html]);
        } else {
            $data = Listing::with('bedroom', 'bathroom', 'portals')->latest()->get();
        }
        return view('home', compact('columns', 'data'));
    }
}

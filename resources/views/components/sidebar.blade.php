@php
$links = [
    ["href" => "burtgels", "text" => "Карго бүртгэх", "is_multi" => false],
    ["href" => "cargos", "text" => "Карго олгох", "is_multi" => false],
    [ "href" => [
            [
                "section_text" => "Админ",
                "section_list" => [
                    ["href" => "user", "text" => "Админ хэрэглэгчид"],
                ]
            ],
            [
                "section_text" => "Үйлчлүүлэгч",
                "section_list" => [
                    ["href" => "customer", "text" => "Үйлчлүүлэгчид"],
                ]
            ],
            
            [
                "section_text" => "Пост",
                "section_list" => [
                    ["href" => "post", "text" => "Постууд"],
                    ["href" => "post.new", "text" => "Шинэ пост"]
                ]
            ]
        ],
        "text" => "Sub Menu",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a>Menu</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            
            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>{{ $link->text }}</span></a>
            </li>
            @else
            <li class="menu-header">{{ $link->text }}</li>
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>

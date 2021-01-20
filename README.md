# Base Frontend Template Project

-   Create Laravel Project
-   Extract Template to Blade Engine
-   Setup Routing Designated to the (template/project) name
    -   When you go to the (template/project) name url show dashboard layout
-   Each Dashboard Template must have blade “layout” file inside layouts folder named via template/project name
-   Extract each template parts to independent/individual component (each component must be under a folder named from the template/project)

## Directory Structure

-   resources
    -   views
        -   components
            -   empiretans/{project-name}
        -   empiretans/{project-name}
            -   pages
            -   dashboard.blade.php
            -   layout.blade.php

## Prerequisites

1.) Change git branch

```sh
git checkout -b project-name-component-name
```

2.) Make Layout Component

```sh
php artisan make:component ProjectNameLayout
```

3.) Change render view name

```php
/**
 * Get the view / contents that represent the component.
 *
 * @return \Illuminate\Contracts\View\View|string
 */
public function render()
{
    // Remove
    // return view('components.project-name.layout');

    // Changed
    return view('project-name.layout');
}
```

4.) Remove useless component

    * resources
        * views
    		* components
    			* project-name-layout <- REMOVE

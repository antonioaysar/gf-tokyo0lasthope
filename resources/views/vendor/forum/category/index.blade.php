{{-- $category is passed as NULL to the master layout view to prevent it from showing in the breadcrumbs --}}
@extends ('forum::master', ['category' => null])

@section ('content')

	<div class="forum-container">

	    @can ('createCategories')
	        @include ('forum::category.partials.form-create')
	    @endcan

	
	    @foreach ($categories as $category)
	        <table class="table table-index forum-table">
	           
	            <tbody>
	                <tr class="category">
	                    @include ('forum::category.partials.list', ['titleClass' => 'forum-lead'])
	                </tr>
	                @if (!$category->children->isEmpty())
	                    <tr>
	                     
	                    </tr>
	                    @foreach ($category->children as $subcategory)
	                        @include ('forum::category.partials.list', ['category' => $subcategory, 'titleClass' => 'forum-subcategory-lead'])
	                    @endforeach
	                @endif
	            </tbody>
	        </table>
	    @endforeach
	    
	</div>
@stop

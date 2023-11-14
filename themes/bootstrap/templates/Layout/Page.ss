<% if $Menu(2) || $SideBarView.Widgets %>
	<% include SideBar %>
<% end_if %>

<div class="col-sm content-container" role="main">
	<article>
        $ElementalArea
	</article>

	$Form
	$PageComments
</div>

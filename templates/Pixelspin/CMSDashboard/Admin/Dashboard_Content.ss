<div class="cms-content fill-height flexbox-area-grow cms-tabset center $BaseCSSClasses" data-layout-type="border"
     data-pjax-fragment="Content">

    <div class="cms-content-header north">
        <div class="cms-content-header-info vertical-align-items flexbox-area-grow">
            <div class="breadcrumbs-wrapper">
				<span class="cms-panel-link crumb last">
                    <% if $SectionTitle %>
                        $SectionTitle
                    <% else %>
                        <%t SilverStripe\Admin\ModelAdmin.Title 'Data Models' %>
                    <% end_if %>
                </span>
            </div>
        </div>
    </div>

    <div class="cms-content-fields center ui-widget-content cms-panel-padded fill-height flexbox-area-grow"
         data-layout-type="border">
        <div class="panel--padded">
            <div class="row">
                <div class="col-md-4">
                    <div class="dashboard-panel">
                        <div class="dashboard-panel-title">
                            <span class="font-icon-monitor"></span> Title
                        </div>
                        <div class="dashboard-panel-content dashboard-panel-content-padded">
                            <p>
                                Pellentesque a consequat leo. Maecenas vehicula nibh in ipsum dapibus, ac congue diam
                                finibus. Duis ac ullamcorper mauris. Mauris ex tellus, elementum vulputate convallis sit
                                amet, bibendum ac massa. Praesent nec dignissim sem. Curabitur eu eros eget nisi commodo
                                luctus. In sit amet ultricies purus. Pellentesque habitant morbi tristique senectus et
                                netus et malesuada fames ac turpis egestas.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-panel">
                        <div class="dashboard-panel-title">
                            <span class="font-icon-monitor"></span> Title
                        </div>
                        <div class="dashboard-panel-content">
                            <table>
                                <tr>
                                    <th>Heading</th>
                                    <td>Col 1</td>
                                    <td>Col 2</td>
                                    <td>Col 3</td>
                                </tr>
                                <tr>
                                    <th>Heading</th>
                                    <td>Col 1</td>
                                    <td>Col 2</td>
                                    <td>Col 3</td>
                                </tr>
                                <tr>
                                    <th>Heading</th>
                                    <td>Col 1</td>
                                    <td>Col 2</td>
                                    <td>Col 3</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="dashboard-panel">
                        <div class="dashboard-panel-title">
                            <span class="font-icon-monitor"></span> Title
                        </div>
                        <div class="dashboard-panel-content dashboard-panel-content-padded">
                            Content here
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

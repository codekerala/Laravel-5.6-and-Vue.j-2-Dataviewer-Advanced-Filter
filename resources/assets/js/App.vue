<template>
    <div class="container">
        <div class="navbar"></div>
        <div class="content">
            <filterable v-bind="filterable">
                <thead slot="thead">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Email</th>
                        <th>Group</th>
                        <th>Total Revenue</th>
                    </tr>
                </thead>
                <tr slot-scope="{item}">
                    <td>{{item.id}}</td>
                    <td>{{item.name}}</td>
                    <td>{{item.company}}</td>
                    <td>{{item.email}}</td>
                    <td>{{item.group}}</td>
                    <td>${{Number(item.total_revenue).toFixed(2)}}</td>
                </tr>
            </filterable>
        </div>
    </div>
</template>
<script type="text/javascript">
    import Filterable from './components/Filterable.vue'
    export default {
        components: { Filterable },
        data() {
            return {
                filterable: {
                    url: '/api/customers',
                    orderables: [
                        {title: 'Id', name: 'id'},
                        {title: 'Name', name: 'name'},
                        {title: 'Company', name: 'company'},
                        {title: 'Email', name: 'email'},
                        {title: 'Group', name: 'group'},
                        {title: 'Total Revenue', name: 'total_revenue'},
                        {title: 'Created At', name: 'created_at'},
                    ],
                    filterGroups: [
                        {
                            name: 'Customer',
                            filters: [
                                {title: 'Id', name: 'id', type: 'numeric'},
                                {title: 'Name', name: 'name', type: 'string'},
                                {title: 'Company', name: 'company', type: 'string'},
                                {title: 'Email', name: 'email', type: 'string'},
                                {title: 'Group', name: 'group', type: 'string'},
                                {title: 'Total Revenue', name: 'total_revenue', type: 'numeric'},
                                {title: 'Created At', name: 'created_at', type: 'datetime'},
                            ]
                        },
                        {
                            name: 'Invoices',
                            filters: [
                                {title: 'Invoices Count', name: 'invoices.count', type: 'counter'},
                                {title: 'Invoices Id', name: 'invoices.id', type: 'numeric'},
                                {title: 'Invoices Issue Date', name: 'invoices.issue_date', type: 'datetime'},
                                {title: 'Invoices Due Date', name: 'invoices.due_date', type: 'datetime'},
                                {title: 'Invoices Total', name: 'invoices.total', type: 'numeric'},
                                {title: 'Invoices Created At', name: 'invoices.created_at', type: 'datetime'},
                            ]
                        }
                    ]
                }
            }
        }
    }
</script>

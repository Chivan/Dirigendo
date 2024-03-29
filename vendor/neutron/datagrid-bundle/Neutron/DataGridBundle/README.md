NeutronDataGridBundle
=====================

The `NeutronDataGridBundle` integrates the [jqgrid](https://github.com/tonytomov/jqGrid)
jQuery plugin with Symfony2. This means easy-to-implement datagrids in your Symfony 2 application!

Features include:

- Datagrid supports Doctrine ORM. (For the next version it will support MongoDB, CouchDB and ElasticSearch).
- Multiple datagrids on a single page
- Searching: You are able to build complex queries with jqgrid query builder
- Filtering using aggregate columns
- Inline data manipulation
- External row manipulation
- Mass actions
- Dependent grids
- Sortable rows
- Highly configurable (It supports most of the jqgrid options)

**Notice:** All PHP code is tested with PHPUnit.

**Caution:** This bundle is developed in sync with [symfony's repository](https://github.com/symfony/symfony). 

**Warning:** Not all jqgrid options are supported. DataGrid can be rendered only in Twig environment.

Documentation
-------------

The bulk of the documentation is stored in the `Resources/doc/index.md`
file in this bundle:

Read the [NeutronDataGridBundle documentation](https://github.com/neutron-project/datagrid-bundle/blob/master/Resources/doc/index.md)

Installation
------------

All the installation instructions are located in [documentation](https://github.com/neutron-project/datagrid-bundle/blob/master/Resources/doc/index.md).

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/neutron-project/datagrid-bundle/issues).

When reporting a bug, it may be a good idea to reproduce it in a basic project
built using the [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
to allow developers of the bundle to reproduce the issue by simply cloning it
and following some steps.



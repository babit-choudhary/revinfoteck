<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});
Breadcrumbs::for('admin.teachers.index', function ($trail) {
    $trail->push("Teachers", route('admin.teachers.index'));
});
Breadcrumbs::for('admin.teachers.create', function ($trail) {
    $trail->push("Create Teacher", route('admin.teachers.create'));
});
Breadcrumbs::for('admin.teachers.edit', function ($trail,$id) {
    $trail->push("Edit Teacher", route('admin.teachers.edit',$id));
});
Breadcrumbs::for('admin.teachers.show', function ($trail,$id) {
    $trail->push("Show Teacher", route('admin.teachers.show',$id));
});
Breadcrumbs::for('admin.students.index', function ($trail) {
    $trail->push("Students", route('admin.students.index'));
});
Breadcrumbs::for('admin.students.create', function ($trail) {
    $trail->push("Create Student", route('admin.students.create'));
});
Breadcrumbs::for('admin.students.edit', function ($trail,$id) {
    $trail->push("Edit Student", route('admin.students.edit',$id));
});
Breadcrumbs::for('admin.students.show', function ($trail,$id) {
    $trail->push("Show Student", route('admin.students.show',$id));
});


require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

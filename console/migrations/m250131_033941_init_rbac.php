<?php

use yii\db\Migration;

/**
 * Class m250131_033941_init_rbac
 */
class m250131_033941_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $manageTestimonials = $auth->createPermission('manageTestimonials');
        $manageTestimonials->description = 'Manage all Testimonials (full access)';
        $auth->add($manageTestimonials);

        $manageProjects = $auth->createPermission('manageProjects');
        $manageProjects->description = 'Manage all Projects (full access)';
        $auth->add($manageProjects);

        $manageBlogs = $auth->createPermission('manageBlogs');
        $manageBlogs->description = 'Manage all Blogs (full access)';
        $auth->add($manageBlogs);

        $viewProject =$auth->createPermission('viewProject');
        $viewProject->description = 'Project actionView';
        $auth->add($viewProject);

        $testimonialManager = $auth->createRole('testimonialManager');
        $auth->add($testimonialManager);
        $auth->addChild($testimonialManager, $manageTestimonials);
        $auth->addChild($testimonialManager, $viewProject);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $testimonialManager);
        $auth->addChild($admin, $manageProjects);
        $auth->addChild($admin, $manageBlogs);

        $auth->assign($admin, 1);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250131_033941_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}

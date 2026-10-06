<?php

namespace Tests\Feature;

use Tests\TestCase;

class ModuleRoutesTest extends TestCase
{
    public function test_dashboard_and_crud_routes_are_available(): void
    {
        $this->get(route('dashboard'))->assertOk();
        $this->get(route('employees.index'))->assertOk();
        $this->get(route('inventory.index'))->assertOk();
        $this->get(route('orders.index'))->assertOk();
    }
}

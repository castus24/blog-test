<?php

namespace App\Enums;

use Spatie\Enum\Laravel\Enum;

/**
 * @method static self VIEW_USERS()
 * @method static self CREATE_USERS()
 * @method static self EDIT_USERS()
 * @method static self DELETE_USERS()
 * @method static self VIEW_ROLES()
 * @method static self CREATE_ROLES()
 * @method static self EDIT_ROLES()
 * @method static self DELETE_ROLES()
 * @method static self VIEW_PERMISSIONS()
 * @method static self ASSIGN_PERMISSIONS()
 * @method static self VIEW_POSTS()
 * @method static self CREATE_POSTS()
 * @method static self EDIT_POSTS()
 * @method static self DELETE_POSTS()
 * @method static self VIEW_CATEGORIES()
 * @method static self CREATE_CATEGORIES()
 * @method static self EDIT_CATEGORIES()
 * @method static self DELETE_CATEGORIES()
 */
final class PermissionEnum extends Enum {}

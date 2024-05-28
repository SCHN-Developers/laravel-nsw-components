<?php

if (!function_exists('getModelAttribute')) {
    /**
     * Get the attribute value from a model if it exists.
     *
     * @param \Illuminate\Database\Eloquent\Model|null $model
     * @param string $attribute
     * @return mixed
     */
    function getModelAttribute($model, $attribute)
    {
        if ($model !== null && $model instanceof \Illuminate\Database\Eloquent\Model) {
            return $model->$attribute ?? null;
        }
        return null;
    }
}
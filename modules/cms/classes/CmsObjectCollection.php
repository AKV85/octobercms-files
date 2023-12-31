<?php namespace Cms\Classes;

use October\Rain\Support\Collection as CollectionBase;

/**
 * CmsObjectCollection represents a collection of Cms Objects
 *
 * @package october\cms
 * @author Alexey Bobkov, Samuel Georges
 */
class CmsObjectCollection extends CollectionBase
{
    /**
     * withComponent returns objects that use the supplied component
     * @param  string|array $components
     * @param null|callable $callback
     * @return static
     */
    public function withComponent($components, $callback = null)
    {
        return $this->filter(function ($object) use ($components, $callback) {
            $hasComponent = false;

            foreach ((array) $components as $componentName) {
                if (!$callback && $object->hasComponent($componentName)) {
                    $hasComponent = true;
                }

                if ($callback && ($component = $object->getComponent($componentName))) {
                    $hasComponent = call_user_func($callback, $component) ?: $hasComponent;
                }
            }

            return $hasComponent;
        });
    }

    /**
     * where objects whose properties match the supplied value.
     * @param string $property
     * @param string $value
     * @param bool $strict
     * @return static
     */
    public function where($property, $value = null, $strict = null)
    {
        return $this->filter(function ($object) use ($property, $value, $strict) {
            if (!array_key_exists($property, $object->settings)) {
                return false;
            }

            return $strict
                ? $object->settings[$property] === $value
                : $object->settings[$property] == $value;
        });
    }

    /**
     * whereComponent objects whose component properties match the supplied value.
     * @param mixed $components
     * @param string $property
     * @param string $value
     * @param bool $strict
     * @return static
     */
    public function whereComponent($components, $property, $value = null, $strict = false)
    {
        $properties = is_array($property) ? $property : [$property => $value];
        $strictMode = (bool) (is_array($property) ? $value : $strict);

        $checkFunc = function($settings) use ($properties, $strictMode) {
            foreach ($properties as $property => $value) {
                if (!array_key_exists($property, $settings)) {
                    return false;
                }

                if ($strictMode && $settings[$property] !== $value) {
                    return false;
                }

                if (!$strictMode && $settings[$property] != $value) {
                    return false;
                }
            }

            return true;
        };

        return $this->filter(function($object) use ($components, $checkFunc) {
            $hasComponent = false;

            foreach ((array) $components as $componentName) {
                if (!$componentAlias = $object->hasComponent($componentName)) {
                    continue;
                }

                $componentSettings = array_get($object->settings, 'components', []);
                if (!array_key_exists($componentAlias, $componentSettings)) {
                    continue;
                }

                $settings = $componentSettings[$componentAlias];
                if ($checkFunc($settings)) {
                    $hasComponent = true;
                }
            }

            return $hasComponent;
        });
    }
}

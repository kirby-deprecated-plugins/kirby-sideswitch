# Kirby Sideswitch

*Version 0.3*

The panel sidebar toggler.

**Opened**

Click X to close.

![](https://github.com/jenstornell/kirby-sideswitch/blob/master/open.png)

**Closed**

Click arrow to open.

![](https://github.com/jenstornell/kirby-sideswitch/blob/master/closed.png)

***Require Kirby 2.3 beta 2***

## Installation

Add the folder `sideswitch` into `/site/plugins/`.

## Blueprint

Add a field with the type `sideswitch`.

```
fields:
  sideswitch:
    type: sideswitch
```

## Usage

You will see a new arrow icon button in the panel. Click on it and the sidebar will hide. Click on it again and it will be visible again.

## When it is needed

There are some cases when it's good with  a plugin like this:

- You have a small screen and want to see more of what you write.
- You have a wide field, like a table with long rows.
- You want some kind of distraction free writing.

## Changelog

### 0.3

- Moved back the close icon to the sidebar again. This time it's a closing X.
- New screenshots. No animations this time.

### 0.2

- Moved assets from inline to files.
- Sass is used for the css.
- The arrow icon button is moved from the sidebar to the main to make it more descrete and natural.

### 0.1

- Initial release
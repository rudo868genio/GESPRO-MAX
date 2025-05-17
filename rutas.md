.
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── AdminController.php
│   │   │   ├── Auth
│   │   │   │   ├── ConfirmPasswordController.php
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   ├── Controller.php
│   │   │   ├── CrudUsersController.php
│   │   │   ├── DocumentController.php
│   │   │   ├── HomeController.php
│   │   │   ├── NotaController.php
│   │   │   ├── PresupuestoController.php
│   │   │   ├── ProyectoController.php
│   │   │   ├── RiesgoController.php
│   │   │   ├── TareaController.php
│   │   │   └── UserController.php
│   │   ├── Kernel.php
│   │   ├── Livewire
│   │   │   ├── DocumentosComponent.php
│   │   │   ├── IntegrantesProyectoModal.php
│   │   │   ├── ProyectoDocumentosComponent.php
│   │   │   ├── ProyectoNotasComponent.php
│   │   │   ├── ProyectoPresupuestos2Component.php
│   │   │   ├── ProyectoRiesgosComponent.php
│   │   │   ├── ProyectoTareasComponent.php
│   │   │   ├── SubComponentDocumentos.php
│   │   │   ├── SubComponentInformacion.php
│   │   │   ├── SubComponentTareas.php
│   │   │   └── TareasProyectoModal.php
│   │   └── Middleware
│   │       ├── AdminAuth.php
│   │       ├── Authenticate.php
│   │       ├── EncryptCookies.php
│   │       ├── PreventRequestsDuringMaintenance.php
│   │       ├── RedirectIfAuthenticated.php
│   │       ├── TrimStrings.php
│   │       ├── TrustHosts.php
│   │       ├── TrustProxies.php
│   │       ├── ValidateSignature.php
│   │       └── VerifyCsrfToken.php
│   ├── Livewire
│   ├── Models
│   │   ├── Document.php
│   │   ├── EquipoProyecto.php
│   │   ├── Nota.php
│   │   ├── Presupuesto.php
│   │   ├── Proyecto.php
│   │   ├── Riesgo.php
│   │   ├── Tarea.php
│   │   └── User.php
│   └── Providers
│       ├── AppServiceProvider.php
│       ├── AuthServiceProvider.php
│       ├── BroadcastServiceProvider.php
│       ├── EventServiceProvider.php
│       └── RouteServiceProvider.php
├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── cors.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── livewire.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── sanctum.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   ├── 2014_10_12_100000_create_password_reset_tokens_table.php
│   │   ├── 2019_08_19_000000_create_failed_jobs_table.php
│   │   ├── 2019_12_14_000001_create_personal_access_tokens_table.php
│   │   ├── 2024_10_11_191510_add_rol_to_users_table.php
│   │   ├── 2024_10_22_191233_create_proyectos_table.php
│   │   ├── 2024_10_29_191241_create_equipo_proyecto_table.php
│   │   ├── 2024_10_29_191725_create_documents_table.php
│   │   ├── 2024_11_04_213434_create_tareas_table.php
│   │   ├── 2024_11_09_042545_create_riesgos_table.php
│   │   ├── 2024_11_09_042717_create_presupuestos_table.php
│   │   ├── 2024_11_09_042901_create_notas_table.php
│   │   ├── 2024_11_16_040029_add_estado_to_tareas_table.php
│   │   ├── 2024_11_23_043959_update_impacto_column_in_riesgos_table.php
│   │   ├── 2024_11_26_180740_add_prioridad_and_fecha_final_to_tareas_table.php
│   │   └── 2024_12_02_232203_add_user_id_to_documents_table.php
│   └── seeders
│       └── DatabaseSeeder.php
├── node_modules
│   ├── asynckit
│   │   ├── bench.js
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── abort.js
│   │   │   ├── async.js
│   │   │   ├── defer.js
│   │   │   ├── iterate.js
│   │   │   ├── readable_asynckit.js
│   │   │   ├── readable_parallel.js
│   │   │   ├── readable_serial.js
│   │   │   ├── readable_serial_ordered.js
│   │   │   ├── state.js
│   │   │   ├── streamify.js
│   │   │   └── terminator.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── parallel.js
│   │   ├── README.md
│   │   ├── serial.js
│   │   ├── serialOrdered.js
│   │   └── stream.js
│   ├── axios
│   │   ├── CHANGELOG.md
│   │   ├── dist
│   │   │   ├── axios.js
│   │   │   ├── axios.js.map
│   │   │   ├── axios.min.js
│   │   │   ├── axios.min.js.map
│   │   │   ├── browser
│   │   │   │   ├── axios.cjs
│   │   │   │   └── axios.cjs.map
│   │   │   ├── esm
│   │   │   │   ├── axios.js
│   │   │   │   ├── axios.js.map
│   │   │   │   ├── axios.min.js
│   │   │   │   └── axios.min.js.map
│   │   │   └── node
│   │   │       ├── axios.cjs
│   │   │       └── axios.cjs.map
│   │   ├── index.d.cts
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── adapters
│   │   │   │   ├── adapters.js
│   │   │   │   ├── fetch.js
│   │   │   │   ├── http.js
│   │   │   │   ├── README.md
│   │   │   │   └── xhr.js
│   │   │   ├── axios.js
│   │   │   ├── cancel
│   │   │   │   ├── CanceledError.js
│   │   │   │   ├── CancelToken.js
│   │   │   │   └── isCancel.js
│   │   │   ├── core
│   │   │   │   ├── AxiosError.js
│   │   │   │   ├── AxiosHeaders.js
│   │   │   │   ├── Axios.js
│   │   │   │   ├── buildFullPath.js
│   │   │   │   ├── dispatchRequest.js
│   │   │   │   ├── InterceptorManager.js
│   │   │   │   ├── mergeConfig.js
│   │   │   │   ├── README.md
│   │   │   │   ├── settle.js
│   │   │   │   └── transformData.js
│   │   │   ├── defaults
│   │   │   │   ├── index.js
│   │   │   │   └── transitional.js
│   │   │   ├── env
│   │   │   │   ├── classes
│   │   │   │   │   └── FormData.js
│   │   │   │   ├── data.js
│   │   │   │   └── README.md
│   │   │   ├── helpers
│   │   │   │   ├── AxiosTransformStream.js
│   │   │   │   ├── AxiosURLSearchParams.js
│   │   │   │   ├── bind.js
│   │   │   │   ├── buildURL.js
│   │   │   │   ├── callbackify.js
│   │   │   │   ├── combineURLs.js
│   │   │   │   ├── composeSignals.js
│   │   │   │   ├── cookies.js
│   │   │   │   ├── deprecatedMethod.js
│   │   │   │   ├── formDataToJSON.js
│   │   │   │   ├── formDataToStream.js
│   │   │   │   ├── fromDataURI.js
│   │   │   │   ├── HttpStatusCode.js
│   │   │   │   ├── isAbsoluteURL.js
│   │   │   │   ├── isAxiosError.js
│   │   │   │   ├── isURLSameOrigin.js
│   │   │   │   ├── null.js
│   │   │   │   ├── parseHeaders.js
│   │   │   │   ├── parseProtocol.js
│   │   │   │   ├── progressEventReducer.js
│   │   │   │   ├── readBlob.js
│   │   │   │   ├── README.md
│   │   │   │   ├── resolveConfig.js
│   │   │   │   ├── speedometer.js
│   │   │   │   ├── spread.js
│   │   │   │   ├── throttle.js
│   │   │   │   ├── toFormData.js
│   │   │   │   ├── toURLEncodedForm.js
│   │   │   │   ├── trackStream.js
│   │   │   │   ├── validator.js
│   │   │   │   └── ZlibHeaderTransformStream.js
│   │   │   ├── platform
│   │   │   │   ├── browser
│   │   │   │   │   ├── classes
│   │   │   │   │   │   ├── Blob.js
│   │   │   │   │   │   ├── FormData.js
│   │   │   │   │   │   └── URLSearchParams.js
│   │   │   │   │   └── index.js
│   │   │   │   ├── common
│   │   │   │   │   └── utils.js
│   │   │   │   ├── index.js
│   │   │   │   └── node
│   │   │   │       ├── classes
│   │   │   │       │   ├── FormData.js
│   │   │   │       │   └── URLSearchParams.js
│   │   │   │       └── index.js
│   │   │   └── utils.js
│   │   ├── LICENSE
│   │   ├── MIGRATION_GUIDE.md
│   │   ├── package.json
│   │   ├── README.md
│   │   └── SECURITY.md
│   ├── bootstrap
│   │   ├── dist
│   │   │   ├── css
│   │   │   │   ├── bootstrap.css
│   │   │   │   ├── bootstrap.css.map
│   │   │   │   ├── bootstrap-grid.css
│   │   │   │   ├── bootstrap-grid.css.map
│   │   │   │   ├── bootstrap-grid.min.css
│   │   │   │   ├── bootstrap-grid.min.css.map
│   │   │   │   ├── bootstrap-grid.rtl.css
│   │   │   │   ├── bootstrap-grid.rtl.css.map
│   │   │   │   ├── bootstrap-grid.rtl.min.css
│   │   │   │   ├── bootstrap-grid.rtl.min.css.map
│   │   │   │   ├── bootstrap.min.css
│   │   │   │   ├── bootstrap.min.css.map
│   │   │   │   ├── bootstrap-reboot.css
│   │   │   │   ├── bootstrap-reboot.css.map
│   │   │   │   ├── bootstrap-reboot.min.css
│   │   │   │   ├── bootstrap-reboot.min.css.map
│   │   │   │   ├── bootstrap-reboot.rtl.css
│   │   │   │   ├── bootstrap-reboot.rtl.css.map
│   │   │   │   ├── bootstrap-reboot.rtl.min.css
│   │   │   │   ├── bootstrap-reboot.rtl.min.css.map
│   │   │   │   ├── bootstrap.rtl.css
│   │   │   │   ├── bootstrap.rtl.css.map
│   │   │   │   ├── bootstrap.rtl.min.css
│   │   │   │   ├── bootstrap.rtl.min.css.map
│   │   │   │   ├── bootstrap-utilities.css
│   │   │   │   ├── bootstrap-utilities.css.map
│   │   │   │   ├── bootstrap-utilities.min.css
│   │   │   │   ├── bootstrap-utilities.min.css.map
│   │   │   │   ├── bootstrap-utilities.rtl.css
│   │   │   │   ├── bootstrap-utilities.rtl.css.map
│   │   │   │   ├── bootstrap-utilities.rtl.min.css
│   │   │   │   └── bootstrap-utilities.rtl.min.css.map
│   │   │   └── js
│   │   │       ├── bootstrap.bundle.js
│   │   │       ├── bootstrap.bundle.js.map
│   │   │       ├── bootstrap.bundle.min.js
│   │   │       ├── bootstrap.bundle.min.js.map
│   │   │       ├── bootstrap.esm.js
│   │   │       ├── bootstrap.esm.js.map
│   │   │       ├── bootstrap.esm.min.js
│   │   │       ├── bootstrap.esm.min.js.map
│   │   │       ├── bootstrap.js
│   │   │       ├── bootstrap.js.map
│   │   │       ├── bootstrap.min.js
│   │   │       └── bootstrap.min.js.map
│   │   ├── js
│   │   │   ├── dist
│   │   │   │   ├── alert.js
│   │   │   │   ├── alert.js.map
│   │   │   │   ├── base-component.js
│   │   │   │   ├── base-component.js.map
│   │   │   │   ├── button.js
│   │   │   │   ├── button.js.map
│   │   │   │   ├── carousel.js
│   │   │   │   ├── carousel.js.map
│   │   │   │   ├── collapse.js
│   │   │   │   ├── collapse.js.map
│   │   │   │   ├── dom
│   │   │   │   │   ├── data.js
│   │   │   │   │   ├── data.js.map
│   │   │   │   │   ├── event-handler.js
│   │   │   │   │   ├── event-handler.js.map
│   │   │   │   │   ├── manipulator.js
│   │   │   │   │   ├── manipulator.js.map
│   │   │   │   │   ├── selector-engine.js
│   │   │   │   │   └── selector-engine.js.map
│   │   │   │   ├── dropdown.js
│   │   │   │   ├── dropdown.js.map
│   │   │   │   ├── modal.js
│   │   │   │   ├── modal.js.map
│   │   │   │   ├── offcanvas.js
│   │   │   │   ├── offcanvas.js.map
│   │   │   │   ├── popover.js
│   │   │   │   ├── popover.js.map
│   │   │   │   ├── scrollspy.js
│   │   │   │   ├── scrollspy.js.map
│   │   │   │   ├── tab.js
│   │   │   │   ├── tab.js.map
│   │   │   │   ├── toast.js
│   │   │   │   ├── toast.js.map
│   │   │   │   ├── tooltip.js
│   │   │   │   ├── tooltip.js.map
│   │   │   │   └── util
│   │   │   │       ├── backdrop.js
│   │   │   │       ├── backdrop.js.map
│   │   │   │       ├── component-functions.js
│   │   │   │       ├── component-functions.js.map
│   │   │   │       ├── config.js
│   │   │   │       ├── config.js.map
│   │   │   │       ├── focustrap.js
│   │   │   │       ├── focustrap.js.map
│   │   │   │       ├── index.js
│   │   │   │       ├── index.js.map
│   │   │   │       ├── sanitizer.js
│   │   │   │       ├── sanitizer.js.map
│   │   │   │       ├── scrollbar.js
│   │   │   │       ├── scrollbar.js.map
│   │   │   │       ├── swipe.js
│   │   │   │       ├── swipe.js.map
│   │   │   │       ├── template-factory.js
│   │   │   │       └── template-factory.js.map
│   │   │   ├── index.esm.js
│   │   │   ├── index.umd.js
│   │   │   └── src
│   │   │       ├── alert.js
│   │   │       ├── base-component.js
│   │   │       ├── button.js
│   │   │       ├── carousel.js
│   │   │       ├── collapse.js
│   │   │       ├── dom
│   │   │       │   ├── data.js
│   │   │       │   ├── event-handler.js
│   │   │       │   ├── manipulator.js
│   │   │       │   └── selector-engine.js
│   │   │       ├── dropdown.js
│   │   │       ├── modal.js
│   │   │       ├── offcanvas.js
│   │   │       ├── popover.js
│   │   │       ├── scrollspy.js
│   │   │       ├── tab.js
│   │   │       ├── toast.js
│   │   │       ├── tooltip.js
│   │   │       └── util
│   │   │           ├── backdrop.js
│   │   │           ├── component-functions.js
│   │   │           ├── config.js
│   │   │           ├── focustrap.js
│   │   │           ├── index.js
│   │   │           ├── sanitizer.js
│   │   │           ├── scrollbar.js
│   │   │           ├── swipe.js
│   │   │           └── template-factory.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── README.md
│   │   └── scss
│   │       ├── _accordion.scss
│   │       ├── _alert.scss
│   │       ├── _badge.scss
│   │       ├── bootstrap-grid.scss
│   │       ├── bootstrap-reboot.scss
│   │       ├── bootstrap.scss
│   │       ├── bootstrap-utilities.scss
│   │       ├── _breadcrumb.scss
│   │       ├── _button-group.scss
│   │       ├── _buttons.scss
│   │       ├── _card.scss
│   │       ├── _carousel.scss
│   │       ├── _close.scss
│   │       ├── _containers.scss
│   │       ├── _dropdown.scss
│   │       ├── forms
│   │       │   ├── _floating-labels.scss
│   │       │   ├── _form-check.scss
│   │       │   ├── _form-control.scss
│   │       │   ├── _form-range.scss
│   │       │   ├── _form-select.scss
│   │       │   ├── _form-text.scss
│   │       │   ├── _input-group.scss
│   │       │   ├── _labels.scss
│   │       │   └── _validation.scss
│   │       ├── _forms.scss
│   │       ├── _functions.scss
│   │       ├── _grid.scss
│   │       ├── helpers
│   │       │   ├── _clearfix.scss
│   │       │   ├── _color-bg.scss
│   │       │   ├── _colored-links.scss
│   │       │   ├── _focus-ring.scss
│   │       │   ├── _icon-link.scss
│   │       │   ├── _position.scss
│   │       │   ├── _ratio.scss
│   │       │   ├── _stacks.scss
│   │       │   ├── _stretched-link.scss
│   │       │   ├── _text-truncation.scss
│   │       │   ├── _visually-hidden.scss
│   │       │   └── _vr.scss
│   │       ├── _helpers.scss
│   │       ├── _images.scss
│   │       ├── _list-group.scss
│   │       ├── _maps.scss
│   │       ├── mixins
│   │       │   ├── _alert.scss
│   │       │   ├── _backdrop.scss
│   │       │   ├── _banner.scss
│   │       │   ├── _border-radius.scss
│   │       │   ├── _box-shadow.scss
│   │       │   ├── _breakpoints.scss
│   │       │   ├── _buttons.scss
│   │       │   ├── _caret.scss
│   │       │   ├── _clearfix.scss
│   │       │   ├── _color-mode.scss
│   │       │   ├── _color-scheme.scss
│   │       │   ├── _container.scss
│   │       │   ├── _deprecate.scss
│   │       │   ├── _forms.scss
│   │       │   ├── _gradients.scss
│   │       │   ├── _grid.scss
│   │       │   ├── _image.scss
│   │       │   ├── _list-group.scss
│   │       │   ├── _lists.scss
│   │       │   ├── _pagination.scss
│   │       │   ├── _reset-text.scss
│   │       │   ├── _resize.scss
│   │       │   ├── _table-variants.scss
│   │       │   ├── _text-truncate.scss
│   │       │   ├── _transition.scss
│   │       │   ├── _utilities.scss
│   │       │   └── _visually-hidden.scss
│   │       ├── _mixins.scss
│   │       ├── _modal.scss
│   │       ├── _navbar.scss
│   │       ├── _nav.scss
│   │       ├── _offcanvas.scss
│   │       ├── _pagination.scss
│   │       ├── _placeholders.scss
│   │       ├── _popover.scss
│   │       ├── _progress.scss
│   │       ├── _reboot.scss
│   │       ├── _root.scss
│   │       ├── _spinners.scss
│   │       ├── _tables.scss
│   │       ├── _toasts.scss
│   │       ├── _tooltip.scss
│   │       ├── _transitions.scss
│   │       ├── _type.scss
│   │       ├── utilities
│   │       │   └── _api.scss
│   │       ├── _utilities.scss
│   │       ├── _variables-dark.scss
│   │       ├── _variables.scss
│   │       └── vendor
│   │           └── _rfs.scss
│   ├── @bufbuild
│   │   └── protobuf
│   │       ├── dist
│   │       │   ├── cjs
│   │       │   │   ├── clone.d.ts
│   │       │   │   ├── clone.js
│   │       │   │   ├── codegenv1
│   │       │   │   │   ├── boot.d.ts
│   │       │   │   │   ├── boot.js
│   │       │   │   │   ├── embed.d.ts
│   │       │   │   │   ├── embed.js
│   │       │   │   │   ├── enum.d.ts
│   │       │   │   │   ├── enum.js
│   │       │   │   │   ├── extension.d.ts
│   │       │   │   │   ├── extension.js
│   │       │   │   │   ├── file.d.ts
│   │       │   │   │   ├── file.js
│   │       │   │   │   ├── index.d.ts
│   │       │   │   │   ├── index.js
│   │       │   │   │   ├── message.d.ts
│   │       │   │   │   ├── message.js
│   │       │   │   │   ├── restore-json-names.d.ts
│   │       │   │   │   ├── restore-json-names.js
│   │       │   │   │   ├── scalar.d.ts
│   │       │   │   │   ├── scalar.js
│   │       │   │   │   ├── service.d.ts
│   │       │   │   │   ├── service.js
│   │       │   │   │   ├── symbols.d.ts
│   │       │   │   │   ├── symbols.js
│   │       │   │   │   ├── types.d.ts
│   │       │   │   │   └── types.js
│   │       │   │   ├── create.d.ts
│   │       │   │   ├── create.js
│   │       │   │   ├── descriptors.d.ts
│   │       │   │   ├── descriptors.js
│   │       │   │   ├── equals.d.ts
│   │       │   │   ├── equals.js
│   │       │   │   ├── extensions.d.ts
│   │       │   │   ├── extensions.js
│   │       │   │   ├── fields.d.ts
│   │       │   │   ├── fields.js
│   │       │   │   ├── from-binary.d.ts
│   │       │   │   ├── from-binary.js
│   │       │   │   ├── from-json.d.ts
│   │       │   │   ├── from-json.js
│   │       │   │   ├── index.d.ts
│   │       │   │   ├── index.js
│   │       │   │   ├── is-message.d.ts
│   │       │   │   ├── is-message.js
│   │       │   │   ├── json-value.d.ts
│   │       │   │   ├── json-value.js
│   │       │   │   ├── package.json
│   │       │   │   ├── proto-int64.d.ts
│   │       │   │   ├── proto-int64.js
│   │       │   │   ├── reflect
│   │       │   │   │   ├── error.d.ts
│   │       │   │   │   ├── error.js
│   │       │   │   │   ├── guard.d.ts
│   │       │   │   │   ├── guard.js
│   │       │   │   │   ├── index.d.ts
│   │       │   │   │   ├── index.js
│   │       │   │   │   ├── names.d.ts
│   │       │   │   │   ├── names.js
│   │       │   │   │   ├── nested-types.d.ts
│   │       │   │   │   ├── nested-types.js
│   │       │   │   │   ├── reflect-check.d.ts
│   │       │   │   │   ├── reflect-check.js
│   │       │   │   │   ├── reflect.d.ts
│   │       │   │   │   ├── reflect.js
│   │       │   │   │   ├── reflect-types.d.ts
│   │       │   │   │   ├── reflect-types.js
│   │       │   │   │   ├── scalar.d.ts
│   │       │   │   │   ├── scalar.js
│   │       │   │   │   ├── unsafe.d.ts
│   │       │   │   │   └── unsafe.js
│   │       │   │   ├── registry.d.ts
│   │       │   │   ├── registry.js
│   │       │   │   ├── to-binary.d.ts
│   │       │   │   ├── to-binary.js
│   │       │   │   ├── to-json.d.ts
│   │       │   │   ├── to-json.js
│   │       │   │   ├── types.d.ts
│   │       │   │   ├── types.js
│   │       │   │   ├── wire
│   │       │   │   │   ├── base64-encoding.d.ts
│   │       │   │   │   ├── base64-encoding.js
│   │       │   │   │   ├── binary-encoding.d.ts
│   │       │   │   │   ├── binary-encoding.js
│   │       │   │   │   ├── index.d.ts
│   │       │   │   │   ├── index.js
│   │       │   │   │   ├── size-delimited.d.ts
│   │       │   │   │   ├── size-delimited.js
│   │       │   │   │   ├── text-encoding.d.ts
│   │       │   │   │   ├── text-encoding.js
│   │       │   │   │   ├── text-format.d.ts
│   │       │   │   │   ├── text-format.js
│   │       │   │   │   ├── varint.d.ts
│   │       │   │   │   └── varint.js
│   │       │   │   └── wkt
│   │       │   │       ├── any.d.ts
│   │       │   │       ├── any.js
│   │       │   │       ├── gen
│   │       │   │       │   └── google
│   │       │   │       │       └── protobuf
│   │       │   │       │           ├── any_pb.d.ts
│   │       │   │       │           ├── any_pb.js
│   │       │   │       │           ├── api_pb.d.ts
│   │       │   │       │           ├── api_pb.js
│   │       │   │       │           ├── compiler
│   │       │   │       │           │   ├── plugin_pb.d.ts
│   │       │   │       │           │   └── plugin_pb.js
│   │       │   │       │           ├── descriptor_pb.d.ts
│   │       │   │       │           ├── descriptor_pb.js
│   │       │   │       │           ├── duration_pb.d.ts
│   │       │   │       │           ├── duration_pb.js
│   │       │   │       │           ├── empty_pb.d.ts
│   │       │   │       │           ├── empty_pb.js
│   │       │   │       │           ├── field_mask_pb.d.ts
│   │       │   │       │           ├── field_mask_pb.js
│   │       │   │       │           ├── source_context_pb.d.ts
│   │       │   │       │           ├── source_context_pb.js
│   │       │   │       │           ├── struct_pb.d.ts
│   │       │   │       │           ├── struct_pb.js
│   │       │   │       │           ├── timestamp_pb.d.ts
│   │       │   │       │           ├── timestamp_pb.js
│   │       │   │       │           ├── type_pb.d.ts
│   │       │   │       │           ├── type_pb.js
│   │       │   │       │           ├── wrappers_pb.d.ts
│   │       │   │       │           └── wrappers_pb.js
│   │       │   │       ├── index.d.ts
│   │       │   │       ├── index.js
│   │       │   │       ├── timestamp.d.ts
│   │       │   │       ├── timestamp.js
│   │       │   │       ├── wrappers.d.ts
│   │       │   │       └── wrappers.js
│   │       │   └── esm
│   │       │       ├── clone.d.ts
│   │       │       ├── clone.js
│   │       │       ├── codegenv1
│   │       │       │   ├── boot.d.ts
│   │       │       │   ├── boot.js
│   │       │       │   ├── embed.d.ts
│   │       │       │   ├── embed.js
│   │       │       │   ├── enum.d.ts
│   │       │       │   ├── enum.js
│   │       │       │   ├── extension.d.ts
│   │       │       │   ├── extension.js
│   │       │       │   ├── file.d.ts
│   │       │       │   ├── file.js
│   │       │       │   ├── index.d.ts
│   │       │       │   ├── index.js
│   │       │       │   ├── message.d.ts
│   │       │       │   ├── message.js
│   │       │       │   ├── restore-json-names.d.ts
│   │       │       │   ├── restore-json-names.js
│   │       │       │   ├── scalar.d.ts
│   │       │       │   ├── scalar.js
│   │       │       │   ├── service.d.ts
│   │       │       │   ├── service.js
│   │       │       │   ├── symbols.d.ts
│   │       │       │   ├── symbols.js
│   │       │       │   ├── types.d.ts
│   │       │       │   └── types.js
│   │       │       ├── create.d.ts
│   │       │       ├── create.js
│   │       │       ├── descriptors.d.ts
│   │       │       ├── descriptors.js
│   │       │       ├── equals.d.ts
│   │       │       ├── equals.js
│   │       │       ├── extensions.d.ts
│   │       │       ├── extensions.js
│   │       │       ├── fields.d.ts
│   │       │       ├── fields.js
│   │       │       ├── from-binary.d.ts
│   │       │       ├── from-binary.js
│   │       │       ├── from-json.d.ts
│   │       │       ├── from-json.js
│   │       │       ├── index.d.ts
│   │       │       ├── index.js
│   │       │       ├── is-message.d.ts
│   │       │       ├── is-message.js
│   │       │       ├── json-value.d.ts
│   │       │       ├── json-value.js
│   │       │       ├── proto-int64.d.ts
│   │       │       ├── proto-int64.js
│   │       │       ├── reflect
│   │       │       │   ├── error.d.ts
│   │       │       │   ├── error.js
│   │       │       │   ├── guard.d.ts
│   │       │       │   ├── guard.js
│   │       │       │   ├── index.d.ts
│   │       │       │   ├── index.js
│   │       │       │   ├── names.d.ts
│   │       │       │   ├── names.js
│   │       │       │   ├── nested-types.d.ts
│   │       │       │   ├── nested-types.js
│   │       │       │   ├── reflect-check.d.ts
│   │       │       │   ├── reflect-check.js
│   │       │       │   ├── reflect.d.ts
│   │       │       │   ├── reflect.js
│   │       │       │   ├── reflect-types.d.ts
│   │       │       │   ├── reflect-types.js
│   │       │       │   ├── scalar.d.ts
│   │       │       │   ├── scalar.js
│   │       │       │   ├── unsafe.d.ts
│   │       │       │   └── unsafe.js
│   │       │       ├── registry.d.ts
│   │       │       ├── registry.js
│   │       │       ├── to-binary.d.ts
│   │       │       ├── to-binary.js
│   │       │       ├── to-json.d.ts
│   │       │       ├── to-json.js
│   │       │       ├── types.d.ts
│   │       │       ├── types.js
│   │       │       ├── wire
│   │       │       │   ├── base64-encoding.d.ts
│   │       │       │   ├── base64-encoding.js
│   │       │       │   ├── binary-encoding.d.ts
│   │       │       │   ├── binary-encoding.js
│   │       │       │   ├── index.d.ts
│   │       │       │   ├── index.js
│   │       │       │   ├── size-delimited.d.ts
│   │       │       │   ├── size-delimited.js
│   │       │       │   ├── text-encoding.d.ts
│   │       │       │   ├── text-encoding.js
│   │       │       │   ├── text-format.d.ts
│   │       │       │   ├── text-format.js
│   │       │       │   ├── varint.d.ts
│   │       │       │   └── varint.js
│   │       │       └── wkt
│   │       │           ├── any.d.ts
│   │       │           ├── any.js
│   │       │           ├── gen
│   │       │           │   └── google
│   │       │           │       └── protobuf
│   │       │           │           ├── any_pb.d.ts
│   │       │           │           ├── any_pb.js
│   │       │           │           ├── api_pb.d.ts
│   │       │           │           ├── api_pb.js
│   │       │           │           ├── compiler
│   │       │           │           │   ├── plugin_pb.d.ts
│   │       │           │           │   └── plugin_pb.js
│   │       │           │           ├── descriptor_pb.d.ts
│   │       │           │           ├── descriptor_pb.js
│   │       │           │           ├── duration_pb.d.ts
│   │       │           │           ├── duration_pb.js
│   │       │           │           ├── empty_pb.d.ts
│   │       │           │           ├── empty_pb.js
│   │       │           │           ├── field_mask_pb.d.ts
│   │       │           │           ├── field_mask_pb.js
│   │       │           │           ├── source_context_pb.d.ts
│   │       │           │           ├── source_context_pb.js
│   │       │           │           ├── struct_pb.d.ts
│   │       │           │           ├── struct_pb.js
│   │       │           │           ├── timestamp_pb.d.ts
│   │       │           │           ├── timestamp_pb.js
│   │       │           │           ├── type_pb.d.ts
│   │       │           │           ├── type_pb.js
│   │       │           │           ├── wrappers_pb.d.ts
│   │       │           │           └── wrappers_pb.js
│   │       │           ├── index.d.ts
│   │       │           ├── index.js
│   │       │           ├── timestamp.d.ts
│   │       │           ├── timestamp.js
│   │       │           ├── wrappers.d.ts
│   │       │           └── wrappers.js
│   │       ├── package.json
│   │       └── README.md
│   ├── buffer-builder
│   │   ├── buffer-builder.js
│   │   ├── LICENSE.txt
│   │   ├── package.json
│   │   ├── ReadMe.md
│   │   └── test
│   │       └── buffer-builder-test.js
│   ├── colorjs.io
│   │   ├── dist
│   │   │   ├── color.cjs
│   │   │   ├── color.cjs.map
│   │   │   ├── color-fn.cjs
│   │   │   ├── color-fn.cjs.map
│   │   │   ├── color-fn.legacy.cjs
│   │   │   ├── color-fn.legacy.cjs.map
│   │   │   ├── color-fn.legacy.min.cjs
│   │   │   ├── color-fn.legacy.min.cjs.map
│   │   │   ├── color-fn.min.cjs
│   │   │   ├── color-fn.min.cjs.map
│   │   │   ├── color.global.js
│   │   │   ├── color.global.js.map
│   │   │   ├── color.global.legacy.js
│   │   │   ├── color.global.legacy.js.map
│   │   │   ├── color.global.legacy.min.js
│   │   │   ├── color.global.legacy.min.js.map
│   │   │   ├── color.global.min.js
│   │   │   ├── color.global.min.js.map
│   │   │   ├── color.js
│   │   │   ├── color.js.map
│   │   │   ├── color.legacy.cjs
│   │   │   ├── color.legacy.cjs.map
│   │   │   ├── color.legacy.js
│   │   │   ├── color.legacy.js.map
│   │   │   ├── color.legacy.min.cjs
│   │   │   ├── color.legacy.min.cjs.map
│   │   │   ├── color.legacy.min.js
│   │   │   ├── color.legacy.min.js.map
│   │   │   ├── color.min.cjs
│   │   │   ├── color.min.cjs.map
│   │   │   ├── color.min.js
│   │   │   └── color.min.js.map
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── README.json
│   │   ├── README.md
│   │   ├── src
│   │   │   ├── adapt.js
│   │   │   ├── angles.js
│   │   │   ├── CATs.js
│   │   │   ├── chromaticity.js
│   │   │   ├── clone.js
│   │   │   ├── color.js
│   │   │   ├── contrast
│   │   │   │   ├── APCA.js
│   │   │   │   ├── deltaPhi.js
│   │   │   │   ├── index.js
│   │   │   │   ├── Lstar.js
│   │   │   │   ├── Michelson.js
│   │   │   │   ├── WCAG21.js
│   │   │   │   └── Weber.js
│   │   │   ├── contrast.js
│   │   │   ├── defaults.js
│   │   │   ├── deltaE
│   │   │   │   ├── deltaE2000.js
│   │   │   │   ├── deltaE76.js
│   │   │   │   ├── deltaECMC.js
│   │   │   │   ├── deltaEHCT.js
│   │   │   │   ├── deltaEITP.js
│   │   │   │   ├── deltaEJz.js
│   │   │   │   ├── deltaEOK.js
│   │   │   │   └── index.js
│   │   │   ├── deltaE.js
│   │   │   ├── display.js
│   │   │   ├── distance.js
│   │   │   ├── equals.js
│   │   │   ├── getAll.js
│   │   │   ├── getColor.js
│   │   │   ├── get.js
│   │   │   ├── hooks.js
│   │   │   ├── index-fn.js
│   │   │   ├── index.js
│   │   │   ├── inGamut.js
│   │   │   ├── interpolation.js
│   │   │   ├── keywords.js
│   │   │   ├── luminance.js
│   │   │   ├── multiply-matrices.js
│   │   │   ├── parse.js
│   │   │   ├── rgbspace.js
│   │   │   ├── serialize.js
│   │   │   ├── setAll.js
│   │   │   ├── set.js
│   │   │   ├── space-accessors.js
│   │   │   ├── space.js
│   │   │   ├── spaces
│   │   │   │   ├── a98rgb.js
│   │   │   │   ├── a98rgb-linear.js
│   │   │   │   ├── acescc.js
│   │   │   │   ├── acescg.js
│   │   │   │   ├── cam16.js
│   │   │   │   ├── hct.js
│   │   │   │   ├── hpluv.js
│   │   │   │   ├── hsl.js
│   │   │   │   ├── hsluv.js
│   │   │   │   ├── hsv.js
│   │   │   │   ├── hwb.js
│   │   │   │   ├── ictcp.js
│   │   │   │   ├── index-fn-hdr.js
│   │   │   │   ├── index-fn.js
│   │   │   │   ├── index.js
│   │   │   │   ├── jzazbz.js
│   │   │   │   ├── jzczhz.js
│   │   │   │   ├── lab-d65.js
│   │   │   │   ├── lab.js
│   │   │   │   ├── lch.js
│   │   │   │   ├── lchuv.js
│   │   │   │   ├── luv.js
│   │   │   │   ├── oklab.js
│   │   │   │   ├── oklch.js
│   │   │   │   ├── p3.js
│   │   │   │   ├── p3-linear.js
│   │   │   │   ├── prophoto.js
│   │   │   │   ├── prophoto-linear.js
│   │   │   │   ├── rec2020.js
│   │   │   │   ├── rec2020-linear.js
│   │   │   │   ├── rec2100-hlg.js
│   │   │   │   ├── rec2100-pq.js
│   │   │   │   ├── srgb.js
│   │   │   │   ├── srgb-linear.js
│   │   │   │   ├── xyz-abs-d65.js
│   │   │   │   ├── xyz-d50.js
│   │   │   │   └── xyz-d65.js
│   │   │   ├── toGamut.js
│   │   │   ├── to.js
│   │   │   ├── util.js
│   │   │   └── variations.js
│   │   └── types
│   │       ├── index.d.cts
│   │       ├── index.d.ts
│   │       └── src
│   │           ├── adapt.d.ts
│   │           ├── angles.d.ts
│   │           ├── CATs.d.ts
│   │           ├── chromaticity.d.ts
│   │           ├── clone.d.ts
│   │           ├── color.d.ts
│   │           ├── contrast
│   │           │   ├── APCA.d.ts
│   │           │   ├── deltaPhi.d.ts
│   │           │   ├── index.d.ts
│   │           │   ├── Lstar.d.ts
│   │           │   ├── Michelson.d.ts
│   │           │   ├── WCAG21.d.ts
│   │           │   └── Weber.d.ts
│   │           ├── contrast.d.ts
│   │           ├── defaults.d.ts
│   │           ├── deltaE
│   │           │   ├── deltaE2000.d.ts
│   │           │   ├── deltaE76.d.ts
│   │           │   ├── deltaECMC.d.ts
│   │           │   ├── deltaEHCT.d.ts
│   │           │   ├── deltaEITP.d.ts
│   │           │   ├── deltaEJz.d.ts
│   │           │   ├── deltaEOK.d.ts
│   │           │   └── index.d.ts
│   │           ├── deltaE.d.ts
│   │           ├── display.d.ts
│   │           ├── distance.d.ts
│   │           ├── equals.d.ts
│   │           ├── getAll.d.ts
│   │           ├── getColor.d.ts
│   │           ├── get.d.ts
│   │           ├── hooks.d.ts
│   │           ├── index.d.ts
│   │           ├── index-fn.d.cts
│   │           ├── index-fn.d.ts
│   │           ├── inGamut.d.ts
│   │           ├── interpolation.d.ts
│   │           ├── keywords.d.ts
│   │           ├── luminance.d.ts
│   │           ├── multiply-matrices.d.ts
│   │           ├── parse.d.ts
│   │           ├── rgbspace.d.ts
│   │           ├── serialize.d.ts
│   │           ├── setAll.d.ts
│   │           ├── set.d.ts
│   │           ├── space-accessors.d.ts
│   │           ├── space-coord-accessors.d.ts
│   │           ├── space.d.ts
│   │           ├── spaces
│   │           │   ├── a98rgb.d.ts
│   │           │   ├── a98rgb-linear.d.ts
│   │           │   ├── acescc.d.ts
│   │           │   ├── acescg.d.ts
│   │           │   ├── hpluv.d.ts
│   │           │   ├── hsl.d.ts
│   │           │   ├── hsluv.d.ts
│   │           │   ├── hsv.d.ts
│   │           │   ├── hwb.d.ts
│   │           │   ├── ictcp.d.ts
│   │           │   ├── index.d.ts
│   │           │   ├── index-fn.d.ts
│   │           │   ├── index-fn-hdr.d.ts
│   │           │   ├── jzazbz.d.ts
│   │           │   ├── jzczhz.d.ts
│   │           │   ├── lab-d65.d.ts
│   │           │   ├── lab.d.ts
│   │           │   ├── lch.d.ts
│   │           │   ├── lchuv.d.ts
│   │           │   ├── luv.d.ts
│   │           │   ├── oklab.d.ts
│   │           │   ├── oklch.d.ts
│   │           │   ├── p3.d.ts
│   │           │   ├── p3-linear.d.ts
│   │           │   ├── prophoto.d.ts
│   │           │   ├── prophoto-linear.d.ts
│   │           │   ├── rec2020.d.ts
│   │           │   ├── rec2020-linear.d.ts
│   │           │   ├── rec2100-hlg.d.ts
│   │           │   ├── rec2100-pq.d.ts
│   │           │   ├── srgb.d.ts
│   │           │   ├── srgb-linear.d.ts
│   │           │   ├── xyz-abs-d65.d.ts
│   │           │   ├── xyz-d50.d.ts
│   │           │   └── xyz-d65.d.ts
│   │           ├── to.d.ts
│   │           ├── toGamut.d.ts
│   │           ├── util.d.ts
│   │           └── variations.d.ts
│   ├── combined-stream
│   │   ├── lib
│   │   │   └── combined_stream.js
│   │   ├── License
│   │   ├── package.json
│   │   ├── Readme.md
│   │   └── yarn.lock
│   ├── delayed-stream
│   │   ├── lib
│   │   │   └── delayed_stream.js
│   │   ├── License
│   │   ├── Makefile
│   │   ├── package.json
│   │   └── Readme.md
│   ├── @esbuild
│   │   └── linux-x64
│   │       ├── bin
│   │       │   └── esbuild
│   │       ├── package.json
│   │       └── README.md
│   ├── esbuild
│   │   ├── bin
│   │   │   └── esbuild
│   │   ├── install.js
│   │   ├── lib
│   │   │   ├── main.d.ts
│   │   │   └── main.js
│   │   ├── LICENSE.md
│   │   ├── package.json
│   │   └── README.md
│   ├── follow-redirects
│   │   ├── debug.js
│   │   ├── http.js
│   │   ├── https.js
│   │   ├── index.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── form-data
│   │   ├── index.d.ts
│   │   ├── lib
│   │   │   ├── browser.js
│   │   │   ├── form_data.js
│   │   │   └── populate.js
│   │   ├── License
│   │   ├── package.json
│   │   └── Readme.md
│   ├── @fullcalendar
│   │   ├── core
│   │   │   ├── index.cjs
│   │   │   ├── index.d.ts
│   │   │   ├── index.global.js
│   │   │   ├── index.global.min.js
│   │   │   ├── index.js
│   │   │   ├── internal.cjs
│   │   │   ├── internal-common.cjs
│   │   │   ├── internal-common.d.ts
│   │   │   ├── internal-common.js
│   │   │   ├── internal.d.ts
│   │   │   ├── internal.js
│   │   │   ├── LICENSE.md
│   │   │   ├── locales
│   │   │   │   ├── af.cjs
│   │   │   │   ├── af.d.ts
│   │   │   │   ├── af.global.js
│   │   │   │   ├── af.global.min.js
│   │   │   │   ├── af.js
│   │   │   │   ├── ar.cjs
│   │   │   │   ├── ar.d.ts
│   │   │   │   ├── ar-dz.cjs
│   │   │   │   ├── ar-dz.d.ts
│   │   │   │   ├── ar-dz.global.js
│   │   │   │   ├── ar-dz.global.min.js
│   │   │   │   ├── ar-dz.js
│   │   │   │   ├── ar.global.js
│   │   │   │   ├── ar.global.min.js
│   │   │   │   ├── ar.js
│   │   │   │   ├── ar-kw.cjs
│   │   │   │   ├── ar-kw.d.ts
│   │   │   │   ├── ar-kw.global.js
│   │   │   │   ├── ar-kw.global.min.js
│   │   │   │   ├── ar-kw.js
│   │   │   │   ├── ar-ly.cjs
│   │   │   │   ├── ar-ly.d.ts
│   │   │   │   ├── ar-ly.global.js
│   │   │   │   ├── ar-ly.global.min.js
│   │   │   │   ├── ar-ly.js
│   │   │   │   ├── ar-ma.cjs
│   │   │   │   ├── ar-ma.d.ts
│   │   │   │   ├── ar-ma.global.js
│   │   │   │   ├── ar-ma.global.min.js
│   │   │   │   ├── ar-ma.js
│   │   │   │   ├── ar-sa.cjs
│   │   │   │   ├── ar-sa.d.ts
│   │   │   │   ├── ar-sa.global.js
│   │   │   │   ├── ar-sa.global.min.js
│   │   │   │   ├── ar-sa.js
│   │   │   │   ├── ar-tn.cjs
│   │   │   │   ├── ar-tn.d.ts
│   │   │   │   ├── ar-tn.global.js
│   │   │   │   ├── ar-tn.global.min.js
│   │   │   │   ├── ar-tn.js
│   │   │   │   ├── az.cjs
│   │   │   │   ├── az.d.ts
│   │   │   │   ├── az.global.js
│   │   │   │   ├── az.global.min.js
│   │   │   │   ├── az.js
│   │   │   │   ├── bg.cjs
│   │   │   │   ├── bg.d.ts
│   │   │   │   ├── bg.global.js
│   │   │   │   ├── bg.global.min.js
│   │   │   │   ├── bg.js
│   │   │   │   ├── bn.cjs
│   │   │   │   ├── bn.d.ts
│   │   │   │   ├── bn.global.js
│   │   │   │   ├── bn.global.min.js
│   │   │   │   ├── bn.js
│   │   │   │   ├── bs.cjs
│   │   │   │   ├── bs.d.ts
│   │   │   │   ├── bs.global.js
│   │   │   │   ├── bs.global.min.js
│   │   │   │   ├── bs.js
│   │   │   │   ├── ca.cjs
│   │   │   │   ├── ca.d.ts
│   │   │   │   ├── ca.global.js
│   │   │   │   ├── ca.global.min.js
│   │   │   │   ├── ca.js
│   │   │   │   ├── cs.cjs
│   │   │   │   ├── cs.d.ts
│   │   │   │   ├── cs.global.js
│   │   │   │   ├── cs.global.min.js
│   │   │   │   ├── cs.js
│   │   │   │   ├── cy.cjs
│   │   │   │   ├── cy.d.ts
│   │   │   │   ├── cy.global.js
│   │   │   │   ├── cy.global.min.js
│   │   │   │   ├── cy.js
│   │   │   │   ├── da.cjs
│   │   │   │   ├── da.d.ts
│   │   │   │   ├── da.global.js
│   │   │   │   ├── da.global.min.js
│   │   │   │   ├── da.js
│   │   │   │   ├── de-at.cjs
│   │   │   │   ├── de-at.d.ts
│   │   │   │   ├── de-at.global.js
│   │   │   │   ├── de-at.global.min.js
│   │   │   │   ├── de-at.js
│   │   │   │   ├── de.cjs
│   │   │   │   ├── de.d.ts
│   │   │   │   ├── de.global.js
│   │   │   │   ├── de.global.min.js
│   │   │   │   ├── de.js
│   │   │   │   ├── el.cjs
│   │   │   │   ├── el.d.ts
│   │   │   │   ├── el.global.js
│   │   │   │   ├── el.global.min.js
│   │   │   │   ├── el.js
│   │   │   │   ├── en-au.cjs
│   │   │   │   ├── en-au.d.ts
│   │   │   │   ├── en-au.global.js
│   │   │   │   ├── en-au.global.min.js
│   │   │   │   ├── en-au.js
│   │   │   │   ├── en-gb.cjs
│   │   │   │   ├── en-gb.d.ts
│   │   │   │   ├── en-gb.global.js
│   │   │   │   ├── en-gb.global.min.js
│   │   │   │   ├── en-gb.js
│   │   │   │   ├── en-nz.cjs
│   │   │   │   ├── en-nz.d.ts
│   │   │   │   ├── en-nz.global.js
│   │   │   │   ├── en-nz.global.min.js
│   │   │   │   ├── en-nz.js
│   │   │   │   ├── eo.cjs
│   │   │   │   ├── eo.d.ts
│   │   │   │   ├── eo.global.js
│   │   │   │   ├── eo.global.min.js
│   │   │   │   ├── eo.js
│   │   │   │   ├── es.cjs
│   │   │   │   ├── es.d.ts
│   │   │   │   ├── es.global.js
│   │   │   │   ├── es.global.min.js
│   │   │   │   ├── es.js
│   │   │   │   ├── es-us.cjs
│   │   │   │   ├── es-us.d.ts
│   │   │   │   ├── es-us.global.js
│   │   │   │   ├── es-us.global.min.js
│   │   │   │   ├── es-us.js
│   │   │   │   ├── et.cjs
│   │   │   │   ├── et.d.ts
│   │   │   │   ├── et.global.js
│   │   │   │   ├── et.global.min.js
│   │   │   │   ├── et.js
│   │   │   │   ├── eu.cjs
│   │   │   │   ├── eu.d.ts
│   │   │   │   ├── eu.global.js
│   │   │   │   ├── eu.global.min.js
│   │   │   │   ├── eu.js
│   │   │   │   ├── fa.cjs
│   │   │   │   ├── fa.d.ts
│   │   │   │   ├── fa.global.js
│   │   │   │   ├── fa.global.min.js
│   │   │   │   ├── fa.js
│   │   │   │   ├── fi.cjs
│   │   │   │   ├── fi.d.ts
│   │   │   │   ├── fi.global.js
│   │   │   │   ├── fi.global.min.js
│   │   │   │   ├── fi.js
│   │   │   │   ├── fr-ca.cjs
│   │   │   │   ├── fr-ca.d.ts
│   │   │   │   ├── fr-ca.global.js
│   │   │   │   ├── fr-ca.global.min.js
│   │   │   │   ├── fr-ca.js
│   │   │   │   ├── fr-ch.cjs
│   │   │   │   ├── fr-ch.d.ts
│   │   │   │   ├── fr-ch.global.js
│   │   │   │   ├── fr-ch.global.min.js
│   │   │   │   ├── fr-ch.js
│   │   │   │   ├── fr.cjs
│   │   │   │   ├── fr.d.ts
│   │   │   │   ├── fr.global.js
│   │   │   │   ├── fr.global.min.js
│   │   │   │   ├── fr.js
│   │   │   │   ├── gl.cjs
│   │   │   │   ├── gl.d.ts
│   │   │   │   ├── gl.global.js
│   │   │   │   ├── gl.global.min.js
│   │   │   │   ├── gl.js
│   │   │   │   ├── he.cjs
│   │   │   │   ├── he.d.ts
│   │   │   │   ├── he.global.js
│   │   │   │   ├── he.global.min.js
│   │   │   │   ├── he.js
│   │   │   │   ├── hi.cjs
│   │   │   │   ├── hi.d.ts
│   │   │   │   ├── hi.global.js
│   │   │   │   ├── hi.global.min.js
│   │   │   │   ├── hi.js
│   │   │   │   ├── hr.cjs
│   │   │   │   ├── hr.d.ts
│   │   │   │   ├── hr.global.js
│   │   │   │   ├── hr.global.min.js
│   │   │   │   ├── hr.js
│   │   │   │   ├── hu.cjs
│   │   │   │   ├── hu.d.ts
│   │   │   │   ├── hu.global.js
│   │   │   │   ├── hu.global.min.js
│   │   │   │   ├── hu.js
│   │   │   │   ├── hy-am.cjs
│   │   │   │   ├── hy-am.d.ts
│   │   │   │   ├── hy-am.global.js
│   │   │   │   ├── hy-am.global.min.js
│   │   │   │   ├── hy-am.js
│   │   │   │   ├── id.cjs
│   │   │   │   ├── id.d.ts
│   │   │   │   ├── id.global.js
│   │   │   │   ├── id.global.min.js
│   │   │   │   ├── id.js
│   │   │   │   ├── is.cjs
│   │   │   │   ├── is.d.ts
│   │   │   │   ├── is.global.js
│   │   │   │   ├── is.global.min.js
│   │   │   │   ├── is.js
│   │   │   │   ├── it.cjs
│   │   │   │   ├── it.d.ts
│   │   │   │   ├── it.global.js
│   │   │   │   ├── it.global.min.js
│   │   │   │   ├── it.js
│   │   │   │   ├── ja.cjs
│   │   │   │   ├── ja.d.ts
│   │   │   │   ├── ja.global.js
│   │   │   │   ├── ja.global.min.js
│   │   │   │   ├── ja.js
│   │   │   │   ├── ka.cjs
│   │   │   │   ├── ka.d.ts
│   │   │   │   ├── ka.global.js
│   │   │   │   ├── ka.global.min.js
│   │   │   │   ├── ka.js
│   │   │   │   ├── kk.cjs
│   │   │   │   ├── kk.d.ts
│   │   │   │   ├── kk.global.js
│   │   │   │   ├── kk.global.min.js
│   │   │   │   ├── kk.js
│   │   │   │   ├── km.cjs
│   │   │   │   ├── km.d.ts
│   │   │   │   ├── km.global.js
│   │   │   │   ├── km.global.min.js
│   │   │   │   ├── km.js
│   │   │   │   ├── ko.cjs
│   │   │   │   ├── ko.d.ts
│   │   │   │   ├── ko.global.js
│   │   │   │   ├── ko.global.min.js
│   │   │   │   ├── ko.js
│   │   │   │   ├── ku.cjs
│   │   │   │   ├── ku.d.ts
│   │   │   │   ├── ku.global.js
│   │   │   │   ├── ku.global.min.js
│   │   │   │   ├── ku.js
│   │   │   │   ├── lb.cjs
│   │   │   │   ├── lb.d.ts
│   │   │   │   ├── lb.global.js
│   │   │   │   ├── lb.global.min.js
│   │   │   │   ├── lb.js
│   │   │   │   ├── lt.cjs
│   │   │   │   ├── lt.d.ts
│   │   │   │   ├── lt.global.js
│   │   │   │   ├── lt.global.min.js
│   │   │   │   ├── lt.js
│   │   │   │   ├── lv.cjs
│   │   │   │   ├── lv.d.ts
│   │   │   │   ├── lv.global.js
│   │   │   │   ├── lv.global.min.js
│   │   │   │   ├── lv.js
│   │   │   │   ├── mk.cjs
│   │   │   │   ├── mk.d.ts
│   │   │   │   ├── mk.global.js
│   │   │   │   ├── mk.global.min.js
│   │   │   │   ├── mk.js
│   │   │   │   ├── ms.cjs
│   │   │   │   ├── ms.d.ts
│   │   │   │   ├── ms.global.js
│   │   │   │   ├── ms.global.min.js
│   │   │   │   ├── ms.js
│   │   │   │   ├── nb.cjs
│   │   │   │   ├── nb.d.ts
│   │   │   │   ├── nb.global.js
│   │   │   │   ├── nb.global.min.js
│   │   │   │   ├── nb.js
│   │   │   │   ├── ne.cjs
│   │   │   │   ├── ne.d.ts
│   │   │   │   ├── ne.global.js
│   │   │   │   ├── ne.global.min.js
│   │   │   │   ├── ne.js
│   │   │   │   ├── nl.cjs
│   │   │   │   ├── nl.d.ts
│   │   │   │   ├── nl.global.js
│   │   │   │   ├── nl.global.min.js
│   │   │   │   ├── nl.js
│   │   │   │   ├── nn.cjs
│   │   │   │   ├── nn.d.ts
│   │   │   │   ├── nn.global.js
│   │   │   │   ├── nn.global.min.js
│   │   │   │   ├── nn.js
│   │   │   │   ├── pl.cjs
│   │   │   │   ├── pl.d.ts
│   │   │   │   ├── pl.global.js
│   │   │   │   ├── pl.global.min.js
│   │   │   │   ├── pl.js
│   │   │   │   ├── pt-br.cjs
│   │   │   │   ├── pt-br.d.ts
│   │   │   │   ├── pt-br.global.js
│   │   │   │   ├── pt-br.global.min.js
│   │   │   │   ├── pt-br.js
│   │   │   │   ├── pt.cjs
│   │   │   │   ├── pt.d.ts
│   │   │   │   ├── pt.global.js
│   │   │   │   ├── pt.global.min.js
│   │   │   │   ├── pt.js
│   │   │   │   ├── ro.cjs
│   │   │   │   ├── ro.d.ts
│   │   │   │   ├── ro.global.js
│   │   │   │   ├── ro.global.min.js
│   │   │   │   ├── ro.js
│   │   │   │   ├── ru.cjs
│   │   │   │   ├── ru.d.ts
│   │   │   │   ├── ru.global.js
│   │   │   │   ├── ru.global.min.js
│   │   │   │   ├── ru.js
│   │   │   │   ├── si-lk.cjs
│   │   │   │   ├── si-lk.d.ts
│   │   │   │   ├── si-lk.global.js
│   │   │   │   ├── si-lk.global.min.js
│   │   │   │   ├── si-lk.js
│   │   │   │   ├── sk.cjs
│   │   │   │   ├── sk.d.ts
│   │   │   │   ├── sk.global.js
│   │   │   │   ├── sk.global.min.js
│   │   │   │   ├── sk.js
│   │   │   │   ├── sl.cjs
│   │   │   │   ├── sl.d.ts
│   │   │   │   ├── sl.global.js
│   │   │   │   ├── sl.global.min.js
│   │   │   │   ├── sl.js
│   │   │   │   ├── sm.cjs
│   │   │   │   ├── sm.d.ts
│   │   │   │   ├── sm.global.js
│   │   │   │   ├── sm.global.min.js
│   │   │   │   ├── sm.js
│   │   │   │   ├── sq.cjs
│   │   │   │   ├── sq.d.ts
│   │   │   │   ├── sq.global.js
│   │   │   │   ├── sq.global.min.js
│   │   │   │   ├── sq.js
│   │   │   │   ├── sr.cjs
│   │   │   │   ├── sr-cyrl.cjs
│   │   │   │   ├── sr-cyrl.d.ts
│   │   │   │   ├── sr-cyrl.global.js
│   │   │   │   ├── sr-cyrl.global.min.js
│   │   │   │   ├── sr-cyrl.js
│   │   │   │   ├── sr.d.ts
│   │   │   │   ├── sr.global.js
│   │   │   │   ├── sr.global.min.js
│   │   │   │   ├── sr.js
│   │   │   │   ├── sv.cjs
│   │   │   │   ├── sv.d.ts
│   │   │   │   ├── sv.global.js
│   │   │   │   ├── sv.global.min.js
│   │   │   │   ├── sv.js
│   │   │   │   ├── ta-in.cjs
│   │   │   │   ├── ta-in.d.ts
│   │   │   │   ├── ta-in.global.js
│   │   │   │   ├── ta-in.global.min.js
│   │   │   │   ├── ta-in.js
│   │   │   │   ├── th.cjs
│   │   │   │   ├── th.d.ts
│   │   │   │   ├── th.global.js
│   │   │   │   ├── th.global.min.js
│   │   │   │   ├── th.js
│   │   │   │   ├── tr.cjs
│   │   │   │   ├── tr.d.ts
│   │   │   │   ├── tr.global.js
│   │   │   │   ├── tr.global.min.js
│   │   │   │   ├── tr.js
│   │   │   │   ├── ug.cjs
│   │   │   │   ├── ug.d.ts
│   │   │   │   ├── ug.global.js
│   │   │   │   ├── ug.global.min.js
│   │   │   │   ├── ug.js
│   │   │   │   ├── uk.cjs
│   │   │   │   ├── uk.d.ts
│   │   │   │   ├── uk.global.js
│   │   │   │   ├── uk.global.min.js
│   │   │   │   ├── uk.js
│   │   │   │   ├── uz.cjs
│   │   │   │   ├── uz-cy.cjs
│   │   │   │   ├── uz-cy.d.ts
│   │   │   │   ├── uz-cy.global.js
│   │   │   │   ├── uz-cy.global.min.js
│   │   │   │   ├── uz-cy.js
│   │   │   │   ├── uz.d.ts
│   │   │   │   ├── uz.global.js
│   │   │   │   ├── uz.global.min.js
│   │   │   │   ├── uz.js
│   │   │   │   ├── vi.cjs
│   │   │   │   ├── vi.d.ts
│   │   │   │   ├── vi.global.js
│   │   │   │   ├── vi.global.min.js
│   │   │   │   ├── vi.js
│   │   │   │   ├── zh-cn.cjs
│   │   │   │   ├── zh-cn.d.ts
│   │   │   │   ├── zh-cn.global.js
│   │   │   │   ├── zh-cn.global.min.js
│   │   │   │   ├── zh-cn.js
│   │   │   │   ├── zh-tw.cjs
│   │   │   │   ├── zh-tw.d.ts
│   │   │   │   ├── zh-tw.global.js
│   │   │   │   ├── zh-tw.global.min.js
│   │   │   │   └── zh-tw.js
│   │   │   ├── locales-all.cjs
│   │   │   ├── locales-all.d.ts
│   │   │   ├── locales-all.global.js
│   │   │   ├── locales-all.global.min.js
│   │   │   ├── locales-all.js
│   │   │   ├── package.json
│   │   │   ├── preact.cjs
│   │   │   ├── preact.d.ts
│   │   │   ├── preact.js
│   │   │   └── README.md
│   │   ├── daygrid
│   │   │   ├── index.cjs
│   │   │   ├── index.d.ts
│   │   │   ├── index.global.js
│   │   │   ├── index.global.min.js
│   │   │   ├── index.js
│   │   │   ├── internal.cjs
│   │   │   ├── internal.d.ts
│   │   │   ├── internal.js
│   │   │   ├── LICENSE.md
│   │   │   ├── package.json
│   │   │   └── README.md
│   │   └── timegrid
│   │       ├── index.cjs
│   │       ├── index.d.ts
│   │       ├── index.global.js
│   │       ├── index.global.min.js
│   │       ├── index.js
│   │       ├── internal.cjs
│   │       ├── internal.d.ts
│   │       ├── internal.js
│   │       ├── LICENSE.md
│   │       ├── package.json
│   │       └── README.md
│   ├── has-flag
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── immutable
│   │   ├── dist
│   │   │   ├── immutable.d.ts
│   │   │   ├── immutable.es.js
│   │   │   ├── immutable.js
│   │   │   ├── immutable.js.flow
│   │   │   └── immutable.min.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── laravel-vite-plugin
│   │   ├── bin
│   │   │   └── clean.js
│   │   ├── dist
│   │   │   ├── dev-server-index.html
│   │   │   ├── index.d.ts
│   │   │   └── index.js
│   │   ├── inertia-helpers
│   │   │   ├── index.d.ts
│   │   │   └── index.js
│   │   ├── LICENSE.md
│   │   ├── package.json
│   │   └── README.md
│   ├── mime-db
│   │   ├── db.json
│   │   ├── HISTORY.md
│   │   ├── index.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── mime-types
│   │   ├── HISTORY.md
│   │   ├── index.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── nanoid
│   │   ├── async
│   │   │   ├── index.browser.cjs
│   │   │   ├── index.browser.js
│   │   │   ├── index.cjs
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── index.native.js
│   │   │   └── package.json
│   │   ├── bin
│   │   │   └── nanoid.cjs
│   │   ├── index.browser.cjs
│   │   ├── index.browser.js
│   │   ├── index.cjs
│   │   ├── index.d.cts
│   │   ├── index.d.ts
│   │   ├── index.js
│   │   ├── LICENSE
│   │   ├── nanoid.js
│   │   ├── non-secure
│   │   │   ├── index.cjs
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   └── package.json
│   │   ├── package.json
│   │   ├── README.md
│   │   └── url-alphabet
│   │       ├── index.cjs
│   │       ├── index.js
│   │       └── package.json
│   ├── picocolors
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── picocolors.browser.js
│   │   ├── picocolors.d.ts
│   │   ├── picocolors.js
│   │   ├── README.md
│   │   └── types.d.ts
│   ├── picomatch
│   │   ├── CHANGELOG.md
│   │   ├── index.js
│   │   ├── lib
│   │   │   ├── constants.js
│   │   │   ├── parse.js
│   │   │   ├── picomatch.js
│   │   │   ├── scan.js
│   │   │   └── utils.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── @popperjs
│   │   └── core
│   │       ├── dist
│   │       │   ├── cjs
│   │       │   │   ├── enums.js
│   │       │   │   ├── enums.js.flow
│   │       │   │   ├── enums.js.map
│   │       │   │   ├── popper-base.js
│   │       │   │   ├── popper-base.js.flow
│   │       │   │   ├── popper-base.js.map
│   │       │   │   ├── popper.js
│   │       │   │   ├── popper.js.flow
│   │       │   │   ├── popper.js.map
│   │       │   │   ├── popper-lite.js
│   │       │   │   ├── popper-lite.js.flow
│   │       │   │   └── popper-lite.js.map
│   │       │   ├── esm
│   │       │   │   ├── createPopper.js
│   │       │   │   ├── dom-utils
│   │       │   │   │   ├── contains.js
│   │       │   │   │   ├── getBoundingClientRect.js
│   │       │   │   │   ├── getClippingRect.js
│   │       │   │   │   ├── getCompositeRect.js
│   │       │   │   │   ├── getComputedStyle.js
│   │       │   │   │   ├── getDocumentElement.js
│   │       │   │   │   ├── getDocumentRect.js
│   │       │   │   │   ├── getHTMLElementScroll.js
│   │       │   │   │   ├── getLayoutRect.js
│   │       │   │   │   ├── getNodeName.js
│   │       │   │   │   ├── getNodeScroll.js
│   │       │   │   │   ├── getOffsetParent.js
│   │       │   │   │   ├── getParentNode.js
│   │       │   │   │   ├── getScrollParent.js
│   │       │   │   │   ├── getViewportRect.js
│   │       │   │   │   ├── getWindow.js
│   │       │   │   │   ├── getWindowScrollBarX.js
│   │       │   │   │   ├── getWindowScroll.js
│   │       │   │   │   ├── instanceOf.js
│   │       │   │   │   ├── isLayoutViewport.js
│   │       │   │   │   ├── isScrollParent.js
│   │       │   │   │   ├── isTableElement.js
│   │       │   │   │   └── listScrollParents.js
│   │       │   │   ├── enums.js
│   │       │   │   ├── index.js
│   │       │   │   ├── modifiers
│   │       │   │   │   ├── applyStyles.js
│   │       │   │   │   ├── arrow.js
│   │       │   │   │   ├── computeStyles.js
│   │       │   │   │   ├── eventListeners.js
│   │       │   │   │   ├── flip.js
│   │       │   │   │   ├── hide.js
│   │       │   │   │   ├── index.js
│   │       │   │   │   ├── offset.js
│   │       │   │   │   ├── popperOffsets.js
│   │       │   │   │   └── preventOverflow.js
│   │       │   │   ├── popper-base.js
│   │       │   │   ├── popper.js
│   │       │   │   ├── popper-lite.js
│   │       │   │   ├── types.js
│   │       │   │   └── utils
│   │       │   │       ├── computeAutoPlacement.js
│   │       │   │       ├── computeOffsets.js
│   │       │   │       ├── debounce.js
│   │       │   │       ├── detectOverflow.js
│   │       │   │       ├── expandToHashMap.js
│   │       │   │       ├── getAltAxis.js
│   │       │   │       ├── getAltLen.js
│   │       │   │       ├── getBasePlacement.js
│   │       │   │       ├── getFreshSideObject.js
│   │       │   │       ├── getMainAxisFromPlacement.js
│   │       │   │       ├── getOppositePlacement.js
│   │       │   │       ├── getOppositeVariationPlacement.js
│   │       │   │       ├── getVariation.js
│   │       │   │       ├── math.js
│   │       │   │       ├── mergeByName.js
│   │       │   │       ├── mergePaddingObject.js
│   │       │   │       ├── orderModifiers.js
│   │       │   │       ├── rectToClientRect.js
│   │       │   │       ├── uniqueBy.js
│   │       │   │       ├── userAgent.js
│   │       │   │       └── within.js
│   │       │   └── umd
│   │       │       ├── enums.js
│   │       │       ├── enums.js.map
│   │       │       ├── enums.min.js
│   │       │       ├── enums.min.js.flow
│   │       │       ├── enums.min.js.map
│   │       │       ├── popper-base.js
│   │       │       ├── popper-base.js.map
│   │       │       ├── popper-base.min.js
│   │       │       ├── popper-base.min.js.flow
│   │       │       ├── popper-base.min.js.map
│   │       │       ├── popper.js
│   │       │       ├── popper.js.map
│   │       │       ├── popper-lite.js
│   │       │       ├── popper-lite.js.map
│   │       │       ├── popper-lite.min.js
│   │       │       ├── popper-lite.min.js.flow
│   │       │       ├── popper-lite.min.js.map
│   │       │       ├── popper.min.js
│   │       │       ├── popper.min.js.flow
│   │       │       └── popper.min.js.map
│   │       ├── index.d.ts
│   │       ├── lib
│   │       │   ├── createPopper.d.ts
│   │       │   ├── createPopper.js
│   │       │   ├── createPopper.js.flow
│   │       │   ├── dom-utils
│   │       │   │   ├── contains.d.ts
│   │       │   │   ├── contains.js
│   │       │   │   ├── contains.js.flow
│   │       │   │   ├── getBoundingClientRect.d.ts
│   │       │   │   ├── getBoundingClientRect.js
│   │       │   │   ├── getBoundingClientRect.js.flow
│   │       │   │   ├── getClippingRect.d.ts
│   │       │   │   ├── getClippingRect.js
│   │       │   │   ├── getClippingRect.js.flow
│   │       │   │   ├── getCompositeRect.d.ts
│   │       │   │   ├── getCompositeRect.js
│   │       │   │   ├── getCompositeRect.js.flow
│   │       │   │   ├── getComputedStyle.d.ts
│   │       │   │   ├── getComputedStyle.js
│   │       │   │   ├── getComputedStyle.js.flow
│   │       │   │   ├── getDocumentElement.d.ts
│   │       │   │   ├── getDocumentElement.js
│   │       │   │   ├── getDocumentElement.js.flow
│   │       │   │   ├── getDocumentRect.d.ts
│   │       │   │   ├── getDocumentRect.js
│   │       │   │   ├── getDocumentRect.js.flow
│   │       │   │   ├── getHTMLElementScroll.d.ts
│   │       │   │   ├── getHTMLElementScroll.js
│   │       │   │   ├── getHTMLElementScroll.js.flow
│   │       │   │   ├── getLayoutRect.d.ts
│   │       │   │   ├── getLayoutRect.js
│   │       │   │   ├── getLayoutRect.js.flow
│   │       │   │   ├── getNodeName.d.ts
│   │       │   │   ├── getNodeName.js
│   │       │   │   ├── getNodeName.js.flow
│   │       │   │   ├── getNodeScroll.d.ts
│   │       │   │   ├── getNodeScroll.js
│   │       │   │   ├── getNodeScroll.js.flow
│   │       │   │   ├── getOffsetParent.d.ts
│   │       │   │   ├── getOffsetParent.js
│   │       │   │   ├── getOffsetParent.js.flow
│   │       │   │   ├── getParentNode.d.ts
│   │       │   │   ├── getParentNode.js
│   │       │   │   ├── getParentNode.js.flow
│   │       │   │   ├── getScrollParent.d.ts
│   │       │   │   ├── getScrollParent.js
│   │       │   │   ├── getScrollParent.js.flow
│   │       │   │   ├── getViewportRect.d.ts
│   │       │   │   ├── getViewportRect.js
│   │       │   │   ├── getViewportRect.js.flow
│   │       │   │   ├── getWindow.d.ts
│   │       │   │   ├── getWindow.js
│   │       │   │   ├── getWindow.js.flow
│   │       │   │   ├── getWindowScrollBarX.d.ts
│   │       │   │   ├── getWindowScrollBarX.js
│   │       │   │   ├── getWindowScrollBarX.js.flow
│   │       │   │   ├── getWindowScroll.d.ts
│   │       │   │   ├── getWindowScroll.js
│   │       │   │   ├── getWindowScroll.js.flow
│   │       │   │   ├── instanceOf.d.ts
│   │       │   │   ├── instanceOf.js
│   │       │   │   ├── instanceOf.js.flow
│   │       │   │   ├── isLayoutViewport.d.ts
│   │       │   │   ├── isLayoutViewport.js
│   │       │   │   ├── isLayoutViewport.js.flow
│   │       │   │   ├── isScrollParent.d.ts
│   │       │   │   ├── isScrollParent.js
│   │       │   │   ├── isScrollParent.js.flow
│   │       │   │   ├── isTableElement.d.ts
│   │       │   │   ├── isTableElement.js
│   │       │   │   ├── isTableElement.js.flow
│   │       │   │   ├── listScrollParents.d.ts
│   │       │   │   ├── listScrollParents.js
│   │       │   │   └── listScrollParents.js.flow
│   │       │   ├── enums.d.ts
│   │       │   ├── enums.js
│   │       │   ├── enums.js.flow
│   │       │   ├── index.d.ts
│   │       │   ├── index.js
│   │       │   ├── index.js.flow
│   │       │   ├── modifiers
│   │       │   │   ├── applyStyles.d.ts
│   │       │   │   ├── applyStyles.js
│   │       │   │   ├── applyStyles.js.flow
│   │       │   │   ├── arrow.d.ts
│   │       │   │   ├── arrow.js
│   │       │   │   ├── arrow.js.flow
│   │       │   │   ├── computeStyles.d.ts
│   │       │   │   ├── computeStyles.js
│   │       │   │   ├── computeStyles.js.flow
│   │       │   │   ├── eventListeners.d.ts
│   │       │   │   ├── eventListeners.js
│   │       │   │   ├── eventListeners.js.flow
│   │       │   │   ├── flip.d.ts
│   │       │   │   ├── flip.js
│   │       │   │   ├── flip.js.flow
│   │       │   │   ├── hide.d.ts
│   │       │   │   ├── hide.js
│   │       │   │   ├── hide.js.flow
│   │       │   │   ├── index.d.ts
│   │       │   │   ├── index.js
│   │       │   │   ├── index.js.flow
│   │       │   │   ├── offset.d.ts
│   │       │   │   ├── offset.js
│   │       │   │   ├── offset.js.flow
│   │       │   │   ├── popperOffsets.d.ts
│   │       │   │   ├── popperOffsets.js
│   │       │   │   ├── popperOffsets.js.flow
│   │       │   │   ├── preventOverflow.d.ts
│   │       │   │   ├── preventOverflow.js
│   │       │   │   └── preventOverflow.js.flow
│   │       │   ├── popper-base.d.ts
│   │       │   ├── popper-base.js
│   │       │   ├── popper-base.js.flow
│   │       │   ├── popper.d.ts
│   │       │   ├── popper.js
│   │       │   ├── popper.js.flow
│   │       │   ├── popper-lite.d.ts
│   │       │   ├── popper-lite.js
│   │       │   ├── popper-lite.js.flow
│   │       │   ├── types.d.ts
│   │       │   ├── types.js
│   │       │   ├── types.js.flow
│   │       │   └── utils
│   │       │       ├── computeAutoPlacement.d.ts
│   │       │       ├── computeAutoPlacement.js
│   │       │       ├── computeAutoPlacement.js.flow
│   │       │       ├── computeOffsets.d.ts
│   │       │       ├── computeOffsets.js
│   │       │       ├── computeOffsets.js.flow
│   │       │       ├── debounce.d.ts
│   │       │       ├── debounce.js
│   │       │       ├── debounce.js.flow
│   │       │       ├── detectOverflow.d.ts
│   │       │       ├── detectOverflow.js
│   │       │       ├── detectOverflow.js.flow
│   │       │       ├── expandToHashMap.d.ts
│   │       │       ├── expandToHashMap.js
│   │       │       ├── expandToHashMap.js.flow
│   │       │       ├── getAltAxis.d.ts
│   │       │       ├── getAltAxis.js
│   │       │       ├── getAltAxis.js.flow
│   │       │       ├── getAltLen.d.ts
│   │       │       ├── getAltLen.js
│   │       │       ├── getAltLen.js.flow
│   │       │       ├── getBasePlacement.d.ts
│   │       │       ├── getBasePlacement.js
│   │       │       ├── getBasePlacement.js.flow
│   │       │       ├── getFreshSideObject.d.ts
│   │       │       ├── getFreshSideObject.js
│   │       │       ├── getFreshSideObject.js.flow
│   │       │       ├── getMainAxisFromPlacement.d.ts
│   │       │       ├── getMainAxisFromPlacement.js
│   │       │       ├── getMainAxisFromPlacement.js.flow
│   │       │       ├── getOppositePlacement.d.ts
│   │       │       ├── getOppositePlacement.js
│   │       │       ├── getOppositePlacement.js.flow
│   │       │       ├── getOppositeVariationPlacement.d.ts
│   │       │       ├── getOppositeVariationPlacement.js
│   │       │       ├── getOppositeVariationPlacement.js.flow
│   │       │       ├── getVariation.d.ts
│   │       │       ├── getVariation.js
│   │       │       ├── getVariation.js.flow
│   │       │       ├── math.d.ts
│   │       │       ├── math.js
│   │       │       ├── math.js.flow
│   │       │       ├── mergeByName.d.ts
│   │       │       ├── mergeByName.js
│   │       │       ├── mergeByName.js.flow
│   │       │       ├── mergePaddingObject.d.ts
│   │       │       ├── mergePaddingObject.js
│   │       │       ├── mergePaddingObject.js.flow
│   │       │       ├── orderModifiers.d.ts
│   │       │       ├── orderModifiers.js
│   │       │       ├── orderModifiers.js.flow
│   │       │       ├── rectToClientRect.d.ts
│   │       │       ├── rectToClientRect.js
│   │       │       ├── rectToClientRect.js.flow
│   │       │       ├── uniqueBy.d.ts
│   │       │       ├── uniqueBy.js
│   │       │       ├── uniqueBy.js.flow
│   │       │       ├── userAgent.d.ts
│   │       │       ├── userAgent.js
│   │       │       ├── userAgent.js.flow
│   │       │       ├── within.d.ts
│   │       │       ├── within.js
│   │       │       └── within.js.flow
│   │       ├── LICENSE.md
│   │       ├── package.json
│   │       └── README.md
│   ├── postcss
│   │   ├── lib
│   │   │   ├── at-rule.d.ts
│   │   │   ├── at-rule.js
│   │   │   ├── comment.d.ts
│   │   │   ├── comment.js
│   │   │   ├── container.d.ts
│   │   │   ├── container.js
│   │   │   ├── css-syntax-error.d.ts
│   │   │   ├── css-syntax-error.js
│   │   │   ├── declaration.d.ts
│   │   │   ├── declaration.js
│   │   │   ├── document.d.ts
│   │   │   ├── document.js
│   │   │   ├── fromJSON.d.ts
│   │   │   ├── fromJSON.js
│   │   │   ├── input.d.ts
│   │   │   ├── input.js
│   │   │   ├── lazy-result.d.ts
│   │   │   ├── lazy-result.js
│   │   │   ├── list.d.ts
│   │   │   ├── list.js
│   │   │   ├── map-generator.js
│   │   │   ├── node.d.ts
│   │   │   ├── node.js
│   │   │   ├── no-work-result.d.ts
│   │   │   ├── no-work-result.js
│   │   │   ├── parse.d.ts
│   │   │   ├── parse.js
│   │   │   ├── parser.js
│   │   │   ├── postcss.d.mts
│   │   │   ├── postcss.d.ts
│   │   │   ├── postcss.js
│   │   │   ├── postcss.mjs
│   │   │   ├── previous-map.d.ts
│   │   │   ├── previous-map.js
│   │   │   ├── processor.d.ts
│   │   │   ├── processor.js
│   │   │   ├── result.d.ts
│   │   │   ├── result.js
│   │   │   ├── root.d.ts
│   │   │   ├── root.js
│   │   │   ├── rule.d.ts
│   │   │   ├── rule.js
│   │   │   ├── stringifier.d.ts
│   │   │   ├── stringifier.js
│   │   │   ├── stringify.d.ts
│   │   │   ├── stringify.js
│   │   │   ├── symbols.js
│   │   │   ├── terminal-highlight.js
│   │   │   ├── tokenize.js
│   │   │   ├── warning.d.ts
│   │   │   ├── warning.js
│   │   │   └── warn-once.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── preact
│   │   ├── compat
│   │   │   ├── client.js
│   │   │   ├── client.mjs
│   │   │   ├── dist
│   │   │   │   ├── compat.js
│   │   │   │   ├── compat.js.map
│   │   │   │   ├── compat.mjs
│   │   │   │   ├── compat.module.js
│   │   │   │   ├── compat.module.js.map
│   │   │   │   ├── compat.umd.js
│   │   │   │   └── compat.umd.js.map
│   │   │   ├── jsx-dev-runtime.js
│   │   │   ├── jsx-dev-runtime.mjs
│   │   │   ├── jsx-runtime.js
│   │   │   ├── jsx-runtime.mjs
│   │   │   ├── package.json
│   │   │   ├── scheduler.js
│   │   │   ├── scheduler.mjs
│   │   │   ├── server.browser.js
│   │   │   ├── server.js
│   │   │   ├── server.mjs
│   │   │   ├── src
│   │   │   │   ├── Children.js
│   │   │   │   ├── forwardRef.js
│   │   │   │   ├── index.d.ts
│   │   │   │   ├── index.js
│   │   │   │   ├── internal.d.ts
│   │   │   │   ├── memo.js
│   │   │   │   ├── portals.js
│   │   │   │   ├── PureComponent.js
│   │   │   │   ├── render.js
│   │   │   │   ├── suspense.d.ts
│   │   │   │   ├── suspense.js
│   │   │   │   ├── suspense-list.d.ts
│   │   │   │   ├── suspense-list.js
│   │   │   │   └── util.js
│   │   │   └── test-utils.js
│   │   ├── debug
│   │   │   ├── dist
│   │   │   │   ├── debug.js
│   │   │   │   ├── debug.js.map
│   │   │   │   ├── debug.mjs
│   │   │   │   ├── debug.module.js
│   │   │   │   ├── debug.module.js.map
│   │   │   │   ├── debug.umd.js
│   │   │   │   └── debug.umd.js.map
│   │   │   ├── package.json
│   │   │   └── src
│   │   │       ├── check-props.js
│   │   │       ├── component-stack.js
│   │   │       ├── constants.js
│   │   │       ├── debug.js
│   │   │       ├── index.d.ts
│   │   │       ├── index.js
│   │   │       ├── internal.d.ts
│   │   │       └── util.js
│   │   ├── devtools
│   │   │   ├── dist
│   │   │   │   ├── devtools.js
│   │   │   │   ├── devtools.js.map
│   │   │   │   ├── devtools.mjs
│   │   │   │   ├── devtools.module.js
│   │   │   │   ├── devtools.module.js.map
│   │   │   │   ├── devtools.umd.js
│   │   │   │   └── devtools.umd.js.map
│   │   │   ├── package.json
│   │   │   └── src
│   │   │       ├── devtools.js
│   │   │       ├── index.d.ts
│   │   │       └── index.js
│   │   ├── dist
│   │   │   ├── preact.js
│   │   │   ├── preact.js.map
│   │   │   ├── preact.min.js
│   │   │   ├── preact.min.js.map
│   │   │   ├── preact.min.module.js
│   │   │   ├── preact.min.module.js.map
│   │   │   ├── preact.min.umd.js
│   │   │   ├── preact.min.umd.js.map
│   │   │   ├── preact.mjs
│   │   │   ├── preact.module.js
│   │   │   ├── preact.module.js.map
│   │   │   ├── preact.umd.js
│   │   │   └── preact.umd.js.map
│   │   ├── hooks
│   │   │   ├── dist
│   │   │   │   ├── hooks.js
│   │   │   │   ├── hooks.js.map
│   │   │   │   ├── hooks.mjs
│   │   │   │   ├── hooks.module.js
│   │   │   │   ├── hooks.module.js.map
│   │   │   │   ├── hooks.umd.js
│   │   │   │   └── hooks.umd.js.map
│   │   │   ├── package.json
│   │   │   └── src
│   │   │       ├── index.d.ts
│   │   │       ├── index.js
│   │   │       └── internal.d.ts
│   │   ├── jsx-runtime
│   │   │   ├── dist
│   │   │   │   ├── jsxRuntime.js
│   │   │   │   ├── jsxRuntime.js.map
│   │   │   │   ├── jsxRuntime.mjs
│   │   │   │   ├── jsxRuntime.module.js
│   │   │   │   ├── jsxRuntime.module.js.map
│   │   │   │   ├── jsxRuntime.umd.js
│   │   │   │   └── jsxRuntime.umd.js.map
│   │   │   ├── package.json
│   │   │   └── src
│   │   │       ├── index.d.ts
│   │   │       └── index.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── README.md
│   │   ├── src
│   │   │   ├── cjs.js
│   │   │   ├── clone-element.js
│   │   │   ├── component.js
│   │   │   ├── constants.js
│   │   │   ├── create-context.js
│   │   │   ├── create-element.js
│   │   │   ├── diff
│   │   │   │   ├── catch-error.js
│   │   │   │   ├── children.js
│   │   │   │   ├── index.js
│   │   │   │   └── props.js
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   ├── internal.d.ts
│   │   │   ├── jsx.d.ts
│   │   │   ├── options.js
│   │   │   ├── render.js
│   │   │   └── util.js
│   │   └── test-utils
│   │       ├── dist
│   │       │   ├── testUtils.js
│   │       │   ├── testUtils.js.map
│   │       │   ├── testUtils.mjs
│   │       │   ├── testUtils.module.js
│   │       │   ├── testUtils.module.js.map
│   │       │   ├── testUtils.umd.js
│   │       │   └── testUtils.umd.js.map
│   │       ├── package.json
│   │       └── src
│   │           ├── index.d.ts
│   │           └── index.js
│   ├── proxy-from-env
│   │   ├── index.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── README.md
│   │   └── test.js
│   ├── @rollup
│   │   └── rollup-linux-x64-gnu
│   │       ├── package.json
│   │       ├── README.md
│   │       └── rollup.linux-x64-gnu.node
│   ├── rollup
│   │   ├── dist
│   │   │   ├── bin
│   │   │   │   └── rollup
│   │   │   ├── es
│   │   │   │   ├── getLogFilter.js
│   │   │   │   ├── package.json
│   │   │   │   ├── parseAst.js
│   │   │   │   ├── rollup.js
│   │   │   │   └── shared
│   │   │   │       ├── node-entry.js
│   │   │   │       ├── parseAst.js
│   │   │   │       └── watch.js
│   │   │   ├── getLogFilter.d.ts
│   │   │   ├── getLogFilter.js
│   │   │   ├── loadConfigFile.d.ts
│   │   │   ├── loadConfigFile.js
│   │   │   ├── native.js
│   │   │   ├── parseAst.d.ts
│   │   │   ├── parseAst.js
│   │   │   ├── rollup.d.ts
│   │   │   ├── rollup.js
│   │   │   └── shared
│   │   │       ├── fsevents-importer.js
│   │   │       ├── index.js
│   │   │       ├── loadConfigFile.js
│   │   │       ├── parseAst.js
│   │   │       ├── rollup.js
│   │   │       ├── watch-cli.js
│   │   │       └── watch.js
│   │   ├── LICENSE.md
│   │   ├── package.json
│   │   └── README.md
│   ├── rxjs
│   │   ├── ajax
│   │   │   └── package.json
│   │   ├── CHANGELOG.md
│   │   ├── CODE_OF_CONDUCT.md
│   │   ├── dist
│   │   │   ├── bundles
│   │   │   │   ├── rxjs.umd.js
│   │   │   │   ├── rxjs.umd.js.map
│   │   │   │   ├── rxjs.umd.min.js
│   │   │   │   └── rxjs.umd.min.js.map
│   │   │   ├── cjs
│   │   │   │   ├── ajax
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── fetch
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── internal
│   │   │   │   │   ├── ajax
│   │   │   │   │   │   ├── ajax.js
│   │   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   │   ├── AjaxResponse.js
│   │   │   │   │   │   ├── AjaxResponse.js.map
│   │   │   │   │   │   ├── errors.js
│   │   │   │   │   │   ├── errors.js.map
│   │   │   │   │   │   ├── getXHRResponse.js
│   │   │   │   │   │   ├── getXHRResponse.js.map
│   │   │   │   │   │   ├── types.js
│   │   │   │   │   │   └── types.js.map
│   │   │   │   │   ├── AnyCatcher.js
│   │   │   │   │   ├── AnyCatcher.js.map
│   │   │   │   │   ├── AsyncSubject.js
│   │   │   │   │   ├── AsyncSubject.js.map
│   │   │   │   │   ├── BehaviorSubject.js
│   │   │   │   │   ├── BehaviorSubject.js.map
│   │   │   │   │   ├── config.js
│   │   │   │   │   ├── config.js.map
│   │   │   │   │   ├── firstValueFrom.js
│   │   │   │   │   ├── firstValueFrom.js.map
│   │   │   │   │   ├── lastValueFrom.js
│   │   │   │   │   ├── lastValueFrom.js.map
│   │   │   │   │   ├── NotificationFactories.js
│   │   │   │   │   ├── NotificationFactories.js.map
│   │   │   │   │   ├── Notification.js
│   │   │   │   │   ├── Notification.js.map
│   │   │   │   │   ├── observable
│   │   │   │   │   │   ├── bindCallbackInternals.js
│   │   │   │   │   │   ├── bindCallbackInternals.js.map
│   │   │   │   │   │   ├── bindCallback.js
│   │   │   │   │   │   ├── bindCallback.js.map
│   │   │   │   │   │   ├── bindNodeCallback.js
│   │   │   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── connectable.js
│   │   │   │   │   │   ├── connectable.js.map
│   │   │   │   │   │   ├── ConnectableObservable.js
│   │   │   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   │   │   ├── defer.js
│   │   │   │   │   │   ├── defer.js.map
│   │   │   │   │   │   ├── dom
│   │   │   │   │   │   │   ├── animationFrames.js
│   │   │   │   │   │   │   ├── animationFrames.js.map
│   │   │   │   │   │   │   ├── fetch.js
│   │   │   │   │   │   │   ├── fetch.js.map
│   │   │   │   │   │   │   ├── webSocket.js
│   │   │   │   │   │   │   ├── webSocket.js.map
│   │   │   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   │   │   └── WebSocketSubject.js.map
│   │   │   │   │   │   ├── empty.js
│   │   │   │   │   │   ├── empty.js.map
│   │   │   │   │   │   ├── forkJoin.js
│   │   │   │   │   │   ├── forkJoin.js.map
│   │   │   │   │   │   ├── fromEvent.js
│   │   │   │   │   │   ├── fromEvent.js.map
│   │   │   │   │   │   ├── fromEventPattern.js
│   │   │   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   │   │   ├── from.js
│   │   │   │   │   │   ├── from.js.map
│   │   │   │   │   │   ├── fromSubscribable.js
│   │   │   │   │   │   ├── fromSubscribable.js.map
│   │   │   │   │   │   ├── generate.js
│   │   │   │   │   │   ├── generate.js.map
│   │   │   │   │   │   ├── iif.js
│   │   │   │   │   │   ├── iif.js.map
│   │   │   │   │   │   ├── innerFrom.js
│   │   │   │   │   │   ├── innerFrom.js.map
│   │   │   │   │   │   ├── interval.js
│   │   │   │   │   │   ├── interval.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── never.js
│   │   │   │   │   │   ├── never.js.map
│   │   │   │   │   │   ├── of.js
│   │   │   │   │   │   ├── of.js.map
│   │   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   │   ├── pairs.js
│   │   │   │   │   │   ├── pairs.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── range.js
│   │   │   │   │   │   ├── range.js.map
│   │   │   │   │   │   ├── throwError.js
│   │   │   │   │   │   ├── throwError.js.map
│   │   │   │   │   │   ├── timer.js
│   │   │   │   │   │   ├── timer.js.map
│   │   │   │   │   │   ├── using.js
│   │   │   │   │   │   ├── using.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   └── zip.js.map
│   │   │   │   │   ├── Observable.js
│   │   │   │   │   ├── Observable.js.map
│   │   │   │   │   ├── Operator.js
│   │   │   │   │   ├── Operator.js.map
│   │   │   │   │   ├── operators
│   │   │   │   │   │   ├── audit.js
│   │   │   │   │   │   ├── audit.js.map
│   │   │   │   │   │   ├── auditTime.js
│   │   │   │   │   │   ├── auditTime.js.map
│   │   │   │   │   │   ├── bufferCount.js
│   │   │   │   │   │   ├── bufferCount.js.map
│   │   │   │   │   │   ├── buffer.js
│   │   │   │   │   │   ├── buffer.js.map
│   │   │   │   │   │   ├── bufferTime.js
│   │   │   │   │   │   ├── bufferTime.js.map
│   │   │   │   │   │   ├── bufferToggle.js
│   │   │   │   │   │   ├── bufferToggle.js.map
│   │   │   │   │   │   ├── bufferWhen.js
│   │   │   │   │   │   ├── bufferWhen.js.map
│   │   │   │   │   │   ├── catchError.js
│   │   │   │   │   │   ├── catchError.js.map
│   │   │   │   │   │   ├── combineAll.js
│   │   │   │   │   │   ├── combineAll.js.map
│   │   │   │   │   │   ├── combineLatestAll.js
│   │   │   │   │   │   ├── combineLatestAll.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── combineLatestWith.js
│   │   │   │   │   │   ├── combineLatestWith.js.map
│   │   │   │   │   │   ├── concatAll.js
│   │   │   │   │   │   ├── concatAll.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── concatMap.js
│   │   │   │   │   │   ├── concatMap.js.map
│   │   │   │   │   │   ├── concatMapTo.js
│   │   │   │   │   │   ├── concatMapTo.js.map
│   │   │   │   │   │   ├── concatWith.js
│   │   │   │   │   │   ├── concatWith.js.map
│   │   │   │   │   │   ├── connect.js
│   │   │   │   │   │   ├── connect.js.map
│   │   │   │   │   │   ├── count.js
│   │   │   │   │   │   ├── count.js.map
│   │   │   │   │   │   ├── debounce.js
│   │   │   │   │   │   ├── debounce.js.map
│   │   │   │   │   │   ├── debounceTime.js
│   │   │   │   │   │   ├── debounceTime.js.map
│   │   │   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   │   │   ├── delay.js
│   │   │   │   │   │   ├── delay.js.map
│   │   │   │   │   │   ├── delayWhen.js
│   │   │   │   │   │   ├── delayWhen.js.map
│   │   │   │   │   │   ├── dematerialize.js
│   │   │   │   │   │   ├── dematerialize.js.map
│   │   │   │   │   │   ├── distinct.js
│   │   │   │   │   │   ├── distinct.js.map
│   │   │   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   │   │   ├── elementAt.js
│   │   │   │   │   │   ├── elementAt.js.map
│   │   │   │   │   │   ├── endWith.js
│   │   │   │   │   │   ├── endWith.js.map
│   │   │   │   │   │   ├── every.js
│   │   │   │   │   │   ├── every.js.map
│   │   │   │   │   │   ├── exhaustAll.js
│   │   │   │   │   │   ├── exhaustAll.js.map
│   │   │   │   │   │   ├── exhaust.js
│   │   │   │   │   │   ├── exhaust.js.map
│   │   │   │   │   │   ├── exhaustMap.js
│   │   │   │   │   │   ├── exhaustMap.js.map
│   │   │   │   │   │   ├── expand.js
│   │   │   │   │   │   ├── expand.js.map
│   │   │   │   │   │   ├── filter.js
│   │   │   │   │   │   ├── filter.js.map
│   │   │   │   │   │   ├── finalize.js
│   │   │   │   │   │   ├── finalize.js.map
│   │   │   │   │   │   ├── findIndex.js
│   │   │   │   │   │   ├── findIndex.js.map
│   │   │   │   │   │   ├── find.js
│   │   │   │   │   │   ├── find.js.map
│   │   │   │   │   │   ├── first.js
│   │   │   │   │   │   ├── first.js.map
│   │   │   │   │   │   ├── flatMap.js
│   │   │   │   │   │   ├── flatMap.js.map
│   │   │   │   │   │   ├── groupBy.js
│   │   │   │   │   │   ├── groupBy.js.map
│   │   │   │   │   │   ├── ignoreElements.js
│   │   │   │   │   │   ├── ignoreElements.js.map
│   │   │   │   │   │   ├── isEmpty.js
│   │   │   │   │   │   ├── isEmpty.js.map
│   │   │   │   │   │   ├── joinAllInternals.js
│   │   │   │   │   │   ├── joinAllInternals.js.map
│   │   │   │   │   │   ├── last.js
│   │   │   │   │   │   ├── last.js.map
│   │   │   │   │   │   ├── map.js
│   │   │   │   │   │   ├── map.js.map
│   │   │   │   │   │   ├── mapTo.js
│   │   │   │   │   │   ├── mapTo.js.map
│   │   │   │   │   │   ├── materialize.js
│   │   │   │   │   │   ├── materialize.js.map
│   │   │   │   │   │   ├── max.js
│   │   │   │   │   │   ├── max.js.map
│   │   │   │   │   │   ├── mergeAll.js
│   │   │   │   │   │   ├── mergeAll.js.map
│   │   │   │   │   │   ├── mergeInternals.js
│   │   │   │   │   │   ├── mergeInternals.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── mergeMap.js
│   │   │   │   │   │   ├── mergeMap.js.map
│   │   │   │   │   │   ├── mergeMapTo.js
│   │   │   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   │   │   ├── mergeScan.js
│   │   │   │   │   │   ├── mergeScan.js.map
│   │   │   │   │   │   ├── mergeWith.js
│   │   │   │   │   │   ├── mergeWith.js.map
│   │   │   │   │   │   ├── min.js
│   │   │   │   │   │   ├── min.js.map
│   │   │   │   │   │   ├── multicast.js
│   │   │   │   │   │   ├── multicast.js.map
│   │   │   │   │   │   ├── observeOn.js
│   │   │   │   │   │   ├── observeOn.js.map
│   │   │   │   │   │   ├── onErrorResumeNextWith.js
│   │   │   │   │   │   ├── onErrorResumeNextWith.js.map
│   │   │   │   │   │   ├── OperatorSubscriber.js
│   │   │   │   │   │   ├── OperatorSubscriber.js.map
│   │   │   │   │   │   ├── pairwise.js
│   │   │   │   │   │   ├── pairwise.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── pluck.js
│   │   │   │   │   │   ├── pluck.js.map
│   │   │   │   │   │   ├── publishBehavior.js
│   │   │   │   │   │   ├── publishBehavior.js.map
│   │   │   │   │   │   ├── publish.js
│   │   │   │   │   │   ├── publish.js.map
│   │   │   │   │   │   ├── publishLast.js
│   │   │   │   │   │   ├── publishLast.js.map
│   │   │   │   │   │   ├── publishReplay.js
│   │   │   │   │   │   ├── publishReplay.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── raceWith.js
│   │   │   │   │   │   ├── raceWith.js.map
│   │   │   │   │   │   ├── reduce.js
│   │   │   │   │   │   ├── reduce.js.map
│   │   │   │   │   │   ├── refCount.js
│   │   │   │   │   │   ├── refCount.js.map
│   │   │   │   │   │   ├── repeat.js
│   │   │   │   │   │   ├── repeat.js.map
│   │   │   │   │   │   ├── repeatWhen.js
│   │   │   │   │   │   ├── repeatWhen.js.map
│   │   │   │   │   │   ├── retry.js
│   │   │   │   │   │   ├── retry.js.map
│   │   │   │   │   │   ├── retryWhen.js
│   │   │   │   │   │   ├── retryWhen.js.map
│   │   │   │   │   │   ├── sample.js
│   │   │   │   │   │   ├── sample.js.map
│   │   │   │   │   │   ├── sampleTime.js
│   │   │   │   │   │   ├── sampleTime.js.map
│   │   │   │   │   │   ├── scanInternals.js
│   │   │   │   │   │   ├── scanInternals.js.map
│   │   │   │   │   │   ├── scan.js
│   │   │   │   │   │   ├── scan.js.map
│   │   │   │   │   │   ├── sequenceEqual.js
│   │   │   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   │   │   ├── share.js
│   │   │   │   │   │   ├── share.js.map
│   │   │   │   │   │   ├── shareReplay.js
│   │   │   │   │   │   ├── shareReplay.js.map
│   │   │   │   │   │   ├── single.js
│   │   │   │   │   │   ├── single.js.map
│   │   │   │   │   │   ├── skip.js
│   │   │   │   │   │   ├── skip.js.map
│   │   │   │   │   │   ├── skipLast.js
│   │   │   │   │   │   ├── skipLast.js.map
│   │   │   │   │   │   ├── skipUntil.js
│   │   │   │   │   │   ├── skipUntil.js.map
│   │   │   │   │   │   ├── skipWhile.js
│   │   │   │   │   │   ├── skipWhile.js.map
│   │   │   │   │   │   ├── startWith.js
│   │   │   │   │   │   ├── startWith.js.map
│   │   │   │   │   │   ├── subscribeOn.js
│   │   │   │   │   │   ├── subscribeOn.js.map
│   │   │   │   │   │   ├── switchAll.js
│   │   │   │   │   │   ├── switchAll.js.map
│   │   │   │   │   │   ├── switchMap.js
│   │   │   │   │   │   ├── switchMap.js.map
│   │   │   │   │   │   ├── switchMapTo.js
│   │   │   │   │   │   ├── switchMapTo.js.map
│   │   │   │   │   │   ├── switchScan.js
│   │   │   │   │   │   ├── switchScan.js.map
│   │   │   │   │   │   ├── take.js
│   │   │   │   │   │   ├── take.js.map
│   │   │   │   │   │   ├── takeLast.js
│   │   │   │   │   │   ├── takeLast.js.map
│   │   │   │   │   │   ├── takeUntil.js
│   │   │   │   │   │   ├── takeUntil.js.map
│   │   │   │   │   │   ├── takeWhile.js
│   │   │   │   │   │   ├── takeWhile.js.map
│   │   │   │   │   │   ├── tap.js
│   │   │   │   │   │   ├── tap.js.map
│   │   │   │   │   │   ├── throttle.js
│   │   │   │   │   │   ├── throttle.js.map
│   │   │   │   │   │   ├── throttleTime.js
│   │   │   │   │   │   ├── throttleTime.js.map
│   │   │   │   │   │   ├── throwIfEmpty.js
│   │   │   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   │   │   ├── timeInterval.js
│   │   │   │   │   │   ├── timeInterval.js.map
│   │   │   │   │   │   ├── timeout.js
│   │   │   │   │   │   ├── timeout.js.map
│   │   │   │   │   │   ├── timeoutWith.js
│   │   │   │   │   │   ├── timeoutWith.js.map
│   │   │   │   │   │   ├── timestamp.js
│   │   │   │   │   │   ├── timestamp.js.map
│   │   │   │   │   │   ├── toArray.js
│   │   │   │   │   │   ├── toArray.js.map
│   │   │   │   │   │   ├── windowCount.js
│   │   │   │   │   │   ├── windowCount.js.map
│   │   │   │   │   │   ├── window.js
│   │   │   │   │   │   ├── window.js.map
│   │   │   │   │   │   ├── windowTime.js
│   │   │   │   │   │   ├── windowTime.js.map
│   │   │   │   │   │   ├── windowToggle.js
│   │   │   │   │   │   ├── windowToggle.js.map
│   │   │   │   │   │   ├── windowWhen.js
│   │   │   │   │   │   ├── windowWhen.js.map
│   │   │   │   │   │   ├── withLatestFrom.js
│   │   │   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   │   │   ├── zipAll.js
│   │   │   │   │   │   ├── zipAll.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   ├── zip.js.map
│   │   │   │   │   │   ├── zipWith.js
│   │   │   │   │   │   └── zipWith.js.map
│   │   │   │   │   ├── ReplaySubject.js
│   │   │   │   │   ├── ReplaySubject.js.map
│   │   │   │   │   ├── scheduled
│   │   │   │   │   │   ├── scheduleArray.js
│   │   │   │   │   │   ├── scheduleArray.js.map
│   │   │   │   │   │   ├── scheduleAsyncIterable.js
│   │   │   │   │   │   ├── scheduleAsyncIterable.js.map
│   │   │   │   │   │   ├── scheduled.js
│   │   │   │   │   │   ├── scheduled.js.map
│   │   │   │   │   │   ├── scheduleIterable.js
│   │   │   │   │   │   ├── scheduleIterable.js.map
│   │   │   │   │   │   ├── scheduleObservable.js
│   │   │   │   │   │   ├── scheduleObservable.js.map
│   │   │   │   │   │   ├── schedulePromise.js
│   │   │   │   │   │   ├── schedulePromise.js.map
│   │   │   │   │   │   ├── scheduleReadableStreamLike.js
│   │   │   │   │   │   └── scheduleReadableStreamLike.js.map
│   │   │   │   │   ├── scheduler
│   │   │   │   │   │   ├── Action.js
│   │   │   │   │   │   ├── Action.js.map
│   │   │   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   │   │   ├── animationFrame.js
│   │   │   │   │   │   ├── animationFrame.js.map
│   │   │   │   │   │   ├── animationFrameProvider.js
│   │   │   │   │   │   ├── animationFrameProvider.js.map
│   │   │   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   │   │   ├── AsapAction.js
│   │   │   │   │   │   ├── AsapAction.js.map
│   │   │   │   │   │   ├── asap.js
│   │   │   │   │   │   ├── asap.js.map
│   │   │   │   │   │   ├── AsapScheduler.js
│   │   │   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   │   │   ├── AsyncAction.js
│   │   │   │   │   │   ├── AsyncAction.js.map
│   │   │   │   │   │   ├── async.js
│   │   │   │   │   │   ├── async.js.map
│   │   │   │   │   │   ├── AsyncScheduler.js
│   │   │   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   │   │   ├── dateTimestampProvider.js
│   │   │   │   │   │   ├── dateTimestampProvider.js.map
│   │   │   │   │   │   ├── immediateProvider.js
│   │   │   │   │   │   ├── immediateProvider.js.map
│   │   │   │   │   │   ├── intervalProvider.js
│   │   │   │   │   │   ├── intervalProvider.js.map
│   │   │   │   │   │   ├── performanceTimestampProvider.js
│   │   │   │   │   │   ├── performanceTimestampProvider.js.map
│   │   │   │   │   │   ├── QueueAction.js
│   │   │   │   │   │   ├── QueueAction.js.map
│   │   │   │   │   │   ├── queue.js
│   │   │   │   │   │   ├── queue.js.map
│   │   │   │   │   │   ├── QueueScheduler.js
│   │   │   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   │   │   ├── timeoutProvider.js
│   │   │   │   │   │   ├── timeoutProvider.js.map
│   │   │   │   │   │   ├── timerHandle.js
│   │   │   │   │   │   ├── timerHandle.js.map
│   │   │   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   │   │   └── VirtualTimeScheduler.js.map
│   │   │   │   │   ├── Scheduler.js
│   │   │   │   │   ├── Scheduler.js.map
│   │   │   │   │   ├── Subject.js
│   │   │   │   │   ├── Subject.js.map
│   │   │   │   │   ├── Subscriber.js
│   │   │   │   │   ├── Subscriber.js.map
│   │   │   │   │   ├── Subscription.js
│   │   │   │   │   ├── Subscription.js.map
│   │   │   │   │   ├── symbol
│   │   │   │   │   │   ├── iterator.js
│   │   │   │   │   │   ├── iterator.js.map
│   │   │   │   │   │   ├── observable.js
│   │   │   │   │   │   └── observable.js.map
│   │   │   │   │   ├── testing
│   │   │   │   │   │   ├── ColdObservable.js
│   │   │   │   │   │   ├── ColdObservable.js.map
│   │   │   │   │   │   ├── HotObservable.js
│   │   │   │   │   │   ├── HotObservable.js.map
│   │   │   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   │   │   ├── SubscriptionLog.js
│   │   │   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   │   │   ├── TestMessage.js
│   │   │   │   │   │   ├── TestMessage.js.map
│   │   │   │   │   │   ├── TestScheduler.js
│   │   │   │   │   │   └── TestScheduler.js.map
│   │   │   │   │   ├── types.js
│   │   │   │   │   ├── types.js.map
│   │   │   │   │   └── util
│   │   │   │   │       ├── applyMixins.js
│   │   │   │   │       ├── applyMixins.js.map
│   │   │   │   │       ├── argsArgArrayOrObject.js
│   │   │   │   │       ├── argsArgArrayOrObject.js.map
│   │   │   │   │       ├── args.js
│   │   │   │   │       ├── args.js.map
│   │   │   │   │       ├── argsOrArgArray.js
│   │   │   │   │       ├── argsOrArgArray.js.map
│   │   │   │   │       ├── ArgumentOutOfRangeError.js
│   │   │   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │   │   │       ├── arrRemove.js
│   │   │   │   │       ├── arrRemove.js.map
│   │   │   │   │       ├── createErrorClass.js
│   │   │   │   │       ├── createErrorClass.js.map
│   │   │   │   │       ├── createObject.js
│   │   │   │   │       ├── createObject.js.map
│   │   │   │   │       ├── EmptyError.js
│   │   │   │   │       ├── EmptyError.js.map
│   │   │   │   │       ├── errorContext.js
│   │   │   │   │       ├── errorContext.js.map
│   │   │   │   │       ├── executeSchedule.js
│   │   │   │   │       ├── executeSchedule.js.map
│   │   │   │   │       ├── identity.js
│   │   │   │   │       ├── identity.js.map
│   │   │   │   │       ├── Immediate.js
│   │   │   │   │       ├── Immediate.js.map
│   │   │   │   │       ├── isArrayLike.js
│   │   │   │   │       ├── isArrayLike.js.map
│   │   │   │   │       ├── isAsyncIterable.js
│   │   │   │   │       ├── isAsyncIterable.js.map
│   │   │   │   │       ├── isDate.js
│   │   │   │   │       ├── isDate.js.map
│   │   │   │   │       ├── isFunction.js
│   │   │   │   │       ├── isFunction.js.map
│   │   │   │   │       ├── isInteropObservable.js
│   │   │   │   │       ├── isInteropObservable.js.map
│   │   │   │   │       ├── isIterable.js
│   │   │   │   │       ├── isIterable.js.map
│   │   │   │   │       ├── isObservable.js
│   │   │   │   │       ├── isObservable.js.map
│   │   │   │   │       ├── isPromise.js
│   │   │   │   │       ├── isPromise.js.map
│   │   │   │   │       ├── isReadableStreamLike.js
│   │   │   │   │       ├── isReadableStreamLike.js.map
│   │   │   │   │       ├── isScheduler.js
│   │   │   │   │       ├── isScheduler.js.map
│   │   │   │   │       ├── lift.js
│   │   │   │   │       ├── lift.js.map
│   │   │   │   │       ├── mapOneOrManyArgs.js
│   │   │   │   │       ├── mapOneOrManyArgs.js.map
│   │   │   │   │       ├── noop.js
│   │   │   │   │       ├── noop.js.map
│   │   │   │   │       ├── NotFoundError.js
│   │   │   │   │       ├── NotFoundError.js.map
│   │   │   │   │       ├── not.js
│   │   │   │   │       ├── not.js.map
│   │   │   │   │       ├── ObjectUnsubscribedError.js
│   │   │   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │   │   │       ├── pipe.js
│   │   │   │   │       ├── pipe.js.map
│   │   │   │   │       ├── reportUnhandledError.js
│   │   │   │   │       ├── reportUnhandledError.js.map
│   │   │   │   │       ├── SequenceError.js
│   │   │   │   │       ├── SequenceError.js.map
│   │   │   │   │       ├── subscribeToArray.js
│   │   │   │   │       ├── subscribeToArray.js.map
│   │   │   │   │       ├── throwUnobservableError.js
│   │   │   │   │       ├── throwUnobservableError.js.map
│   │   │   │   │       ├── UnsubscriptionError.js
│   │   │   │   │       ├── UnsubscriptionError.js.map
│   │   │   │   │       ├── workarounds.js
│   │   │   │   │       └── workarounds.js.map
│   │   │   │   ├── operators
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── testing
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   └── webSocket
│   │   │   │       ├── index.js
│   │   │   │       └── index.js.map
│   │   │   ├── esm
│   │   │   │   ├── ajax
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── fetch
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── internal
│   │   │   │   │   ├── ajax
│   │   │   │   │   │   ├── ajax.js
│   │   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   │   ├── AjaxResponse.js
│   │   │   │   │   │   ├── AjaxResponse.js.map
│   │   │   │   │   │   ├── errors.js
│   │   │   │   │   │   ├── errors.js.map
│   │   │   │   │   │   ├── getXHRResponse.js
│   │   │   │   │   │   ├── getXHRResponse.js.map
│   │   │   │   │   │   ├── types.js
│   │   │   │   │   │   └── types.js.map
│   │   │   │   │   ├── AnyCatcher.js
│   │   │   │   │   ├── AnyCatcher.js.map
│   │   │   │   │   ├── AsyncSubject.js
│   │   │   │   │   ├── AsyncSubject.js.map
│   │   │   │   │   ├── BehaviorSubject.js
│   │   │   │   │   ├── BehaviorSubject.js.map
│   │   │   │   │   ├── config.js
│   │   │   │   │   ├── config.js.map
│   │   │   │   │   ├── firstValueFrom.js
│   │   │   │   │   ├── firstValueFrom.js.map
│   │   │   │   │   ├── lastValueFrom.js
│   │   │   │   │   ├── lastValueFrom.js.map
│   │   │   │   │   ├── NotificationFactories.js
│   │   │   │   │   ├── NotificationFactories.js.map
│   │   │   │   │   ├── Notification.js
│   │   │   │   │   ├── Notification.js.map
│   │   │   │   │   ├── observable
│   │   │   │   │   │   ├── bindCallbackInternals.js
│   │   │   │   │   │   ├── bindCallbackInternals.js.map
│   │   │   │   │   │   ├── bindCallback.js
│   │   │   │   │   │   ├── bindCallback.js.map
│   │   │   │   │   │   ├── bindNodeCallback.js
│   │   │   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── connectable.js
│   │   │   │   │   │   ├── connectable.js.map
│   │   │   │   │   │   ├── ConnectableObservable.js
│   │   │   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   │   │   ├── defer.js
│   │   │   │   │   │   ├── defer.js.map
│   │   │   │   │   │   ├── dom
│   │   │   │   │   │   │   ├── animationFrames.js
│   │   │   │   │   │   │   ├── animationFrames.js.map
│   │   │   │   │   │   │   ├── fetch.js
│   │   │   │   │   │   │   ├── fetch.js.map
│   │   │   │   │   │   │   ├── webSocket.js
│   │   │   │   │   │   │   ├── webSocket.js.map
│   │   │   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   │   │   └── WebSocketSubject.js.map
│   │   │   │   │   │   ├── empty.js
│   │   │   │   │   │   ├── empty.js.map
│   │   │   │   │   │   ├── forkJoin.js
│   │   │   │   │   │   ├── forkJoin.js.map
│   │   │   │   │   │   ├── fromEvent.js
│   │   │   │   │   │   ├── fromEvent.js.map
│   │   │   │   │   │   ├── fromEventPattern.js
│   │   │   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   │   │   ├── from.js
│   │   │   │   │   │   ├── from.js.map
│   │   │   │   │   │   ├── fromSubscribable.js
│   │   │   │   │   │   ├── fromSubscribable.js.map
│   │   │   │   │   │   ├── generate.js
│   │   │   │   │   │   ├── generate.js.map
│   │   │   │   │   │   ├── iif.js
│   │   │   │   │   │   ├── iif.js.map
│   │   │   │   │   │   ├── innerFrom.js
│   │   │   │   │   │   ├── innerFrom.js.map
│   │   │   │   │   │   ├── interval.js
│   │   │   │   │   │   ├── interval.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── never.js
│   │   │   │   │   │   ├── never.js.map
│   │   │   │   │   │   ├── of.js
│   │   │   │   │   │   ├── of.js.map
│   │   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   │   ├── pairs.js
│   │   │   │   │   │   ├── pairs.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── range.js
│   │   │   │   │   │   ├── range.js.map
│   │   │   │   │   │   ├── throwError.js
│   │   │   │   │   │   ├── throwError.js.map
│   │   │   │   │   │   ├── timer.js
│   │   │   │   │   │   ├── timer.js.map
│   │   │   │   │   │   ├── using.js
│   │   │   │   │   │   ├── using.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   └── zip.js.map
│   │   │   │   │   ├── Observable.js
│   │   │   │   │   ├── Observable.js.map
│   │   │   │   │   ├── Operator.js
│   │   │   │   │   ├── Operator.js.map
│   │   │   │   │   ├── operators
│   │   │   │   │   │   ├── audit.js
│   │   │   │   │   │   ├── audit.js.map
│   │   │   │   │   │   ├── auditTime.js
│   │   │   │   │   │   ├── auditTime.js.map
│   │   │   │   │   │   ├── bufferCount.js
│   │   │   │   │   │   ├── bufferCount.js.map
│   │   │   │   │   │   ├── buffer.js
│   │   │   │   │   │   ├── buffer.js.map
│   │   │   │   │   │   ├── bufferTime.js
│   │   │   │   │   │   ├── bufferTime.js.map
│   │   │   │   │   │   ├── bufferToggle.js
│   │   │   │   │   │   ├── bufferToggle.js.map
│   │   │   │   │   │   ├── bufferWhen.js
│   │   │   │   │   │   ├── bufferWhen.js.map
│   │   │   │   │   │   ├── catchError.js
│   │   │   │   │   │   ├── catchError.js.map
│   │   │   │   │   │   ├── combineAll.js
│   │   │   │   │   │   ├── combineAll.js.map
│   │   │   │   │   │   ├── combineLatestAll.js
│   │   │   │   │   │   ├── combineLatestAll.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── combineLatestWith.js
│   │   │   │   │   │   ├── combineLatestWith.js.map
│   │   │   │   │   │   ├── concatAll.js
│   │   │   │   │   │   ├── concatAll.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── concatMap.js
│   │   │   │   │   │   ├── concatMap.js.map
│   │   │   │   │   │   ├── concatMapTo.js
│   │   │   │   │   │   ├── concatMapTo.js.map
│   │   │   │   │   │   ├── concatWith.js
│   │   │   │   │   │   ├── concatWith.js.map
│   │   │   │   │   │   ├── connect.js
│   │   │   │   │   │   ├── connect.js.map
│   │   │   │   │   │   ├── count.js
│   │   │   │   │   │   ├── count.js.map
│   │   │   │   │   │   ├── debounce.js
│   │   │   │   │   │   ├── debounce.js.map
│   │   │   │   │   │   ├── debounceTime.js
│   │   │   │   │   │   ├── debounceTime.js.map
│   │   │   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   │   │   ├── delay.js
│   │   │   │   │   │   ├── delay.js.map
│   │   │   │   │   │   ├── delayWhen.js
│   │   │   │   │   │   ├── delayWhen.js.map
│   │   │   │   │   │   ├── dematerialize.js
│   │   │   │   │   │   ├── dematerialize.js.map
│   │   │   │   │   │   ├── distinct.js
│   │   │   │   │   │   ├── distinct.js.map
│   │   │   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   │   │   ├── elementAt.js
│   │   │   │   │   │   ├── elementAt.js.map
│   │   │   │   │   │   ├── endWith.js
│   │   │   │   │   │   ├── endWith.js.map
│   │   │   │   │   │   ├── every.js
│   │   │   │   │   │   ├── every.js.map
│   │   │   │   │   │   ├── exhaustAll.js
│   │   │   │   │   │   ├── exhaustAll.js.map
│   │   │   │   │   │   ├── exhaust.js
│   │   │   │   │   │   ├── exhaust.js.map
│   │   │   │   │   │   ├── exhaustMap.js
│   │   │   │   │   │   ├── exhaustMap.js.map
│   │   │   │   │   │   ├── expand.js
│   │   │   │   │   │   ├── expand.js.map
│   │   │   │   │   │   ├── filter.js
│   │   │   │   │   │   ├── filter.js.map
│   │   │   │   │   │   ├── finalize.js
│   │   │   │   │   │   ├── finalize.js.map
│   │   │   │   │   │   ├── findIndex.js
│   │   │   │   │   │   ├── findIndex.js.map
│   │   │   │   │   │   ├── find.js
│   │   │   │   │   │   ├── find.js.map
│   │   │   │   │   │   ├── first.js
│   │   │   │   │   │   ├── first.js.map
│   │   │   │   │   │   ├── flatMap.js
│   │   │   │   │   │   ├── flatMap.js.map
│   │   │   │   │   │   ├── groupBy.js
│   │   │   │   │   │   ├── groupBy.js.map
│   │   │   │   │   │   ├── ignoreElements.js
│   │   │   │   │   │   ├── ignoreElements.js.map
│   │   │   │   │   │   ├── isEmpty.js
│   │   │   │   │   │   ├── isEmpty.js.map
│   │   │   │   │   │   ├── joinAllInternals.js
│   │   │   │   │   │   ├── joinAllInternals.js.map
│   │   │   │   │   │   ├── last.js
│   │   │   │   │   │   ├── last.js.map
│   │   │   │   │   │   ├── map.js
│   │   │   │   │   │   ├── map.js.map
│   │   │   │   │   │   ├── mapTo.js
│   │   │   │   │   │   ├── mapTo.js.map
│   │   │   │   │   │   ├── materialize.js
│   │   │   │   │   │   ├── materialize.js.map
│   │   │   │   │   │   ├── max.js
│   │   │   │   │   │   ├── max.js.map
│   │   │   │   │   │   ├── mergeAll.js
│   │   │   │   │   │   ├── mergeAll.js.map
│   │   │   │   │   │   ├── mergeInternals.js
│   │   │   │   │   │   ├── mergeInternals.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── mergeMap.js
│   │   │   │   │   │   ├── mergeMap.js.map
│   │   │   │   │   │   ├── mergeMapTo.js
│   │   │   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   │   │   ├── mergeScan.js
│   │   │   │   │   │   ├── mergeScan.js.map
│   │   │   │   │   │   ├── mergeWith.js
│   │   │   │   │   │   ├── mergeWith.js.map
│   │   │   │   │   │   ├── min.js
│   │   │   │   │   │   ├── min.js.map
│   │   │   │   │   │   ├── multicast.js
│   │   │   │   │   │   ├── multicast.js.map
│   │   │   │   │   │   ├── observeOn.js
│   │   │   │   │   │   ├── observeOn.js.map
│   │   │   │   │   │   ├── onErrorResumeNextWith.js
│   │   │   │   │   │   ├── onErrorResumeNextWith.js.map
│   │   │   │   │   │   ├── OperatorSubscriber.js
│   │   │   │   │   │   ├── OperatorSubscriber.js.map
│   │   │   │   │   │   ├── pairwise.js
│   │   │   │   │   │   ├── pairwise.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── pluck.js
│   │   │   │   │   │   ├── pluck.js.map
│   │   │   │   │   │   ├── publishBehavior.js
│   │   │   │   │   │   ├── publishBehavior.js.map
│   │   │   │   │   │   ├── publish.js
│   │   │   │   │   │   ├── publish.js.map
│   │   │   │   │   │   ├── publishLast.js
│   │   │   │   │   │   ├── publishLast.js.map
│   │   │   │   │   │   ├── publishReplay.js
│   │   │   │   │   │   ├── publishReplay.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── raceWith.js
│   │   │   │   │   │   ├── raceWith.js.map
│   │   │   │   │   │   ├── reduce.js
│   │   │   │   │   │   ├── reduce.js.map
│   │   │   │   │   │   ├── refCount.js
│   │   │   │   │   │   ├── refCount.js.map
│   │   │   │   │   │   ├── repeat.js
│   │   │   │   │   │   ├── repeat.js.map
│   │   │   │   │   │   ├── repeatWhen.js
│   │   │   │   │   │   ├── repeatWhen.js.map
│   │   │   │   │   │   ├── retry.js
│   │   │   │   │   │   ├── retry.js.map
│   │   │   │   │   │   ├── retryWhen.js
│   │   │   │   │   │   ├── retryWhen.js.map
│   │   │   │   │   │   ├── sample.js
│   │   │   │   │   │   ├── sample.js.map
│   │   │   │   │   │   ├── sampleTime.js
│   │   │   │   │   │   ├── sampleTime.js.map
│   │   │   │   │   │   ├── scanInternals.js
│   │   │   │   │   │   ├── scanInternals.js.map
│   │   │   │   │   │   ├── scan.js
│   │   │   │   │   │   ├── scan.js.map
│   │   │   │   │   │   ├── sequenceEqual.js
│   │   │   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   │   │   ├── share.js
│   │   │   │   │   │   ├── share.js.map
│   │   │   │   │   │   ├── shareReplay.js
│   │   │   │   │   │   ├── shareReplay.js.map
│   │   │   │   │   │   ├── single.js
│   │   │   │   │   │   ├── single.js.map
│   │   │   │   │   │   ├── skip.js
│   │   │   │   │   │   ├── skip.js.map
│   │   │   │   │   │   ├── skipLast.js
│   │   │   │   │   │   ├── skipLast.js.map
│   │   │   │   │   │   ├── skipUntil.js
│   │   │   │   │   │   ├── skipUntil.js.map
│   │   │   │   │   │   ├── skipWhile.js
│   │   │   │   │   │   ├── skipWhile.js.map
│   │   │   │   │   │   ├── startWith.js
│   │   │   │   │   │   ├── startWith.js.map
│   │   │   │   │   │   ├── subscribeOn.js
│   │   │   │   │   │   ├── subscribeOn.js.map
│   │   │   │   │   │   ├── switchAll.js
│   │   │   │   │   │   ├── switchAll.js.map
│   │   │   │   │   │   ├── switchMap.js
│   │   │   │   │   │   ├── switchMap.js.map
│   │   │   │   │   │   ├── switchMapTo.js
│   │   │   │   │   │   ├── switchMapTo.js.map
│   │   │   │   │   │   ├── switchScan.js
│   │   │   │   │   │   ├── switchScan.js.map
│   │   │   │   │   │   ├── take.js
│   │   │   │   │   │   ├── take.js.map
│   │   │   │   │   │   ├── takeLast.js
│   │   │   │   │   │   ├── takeLast.js.map
│   │   │   │   │   │   ├── takeUntil.js
│   │   │   │   │   │   ├── takeUntil.js.map
│   │   │   │   │   │   ├── takeWhile.js
│   │   │   │   │   │   ├── takeWhile.js.map
│   │   │   │   │   │   ├── tap.js
│   │   │   │   │   │   ├── tap.js.map
│   │   │   │   │   │   ├── throttle.js
│   │   │   │   │   │   ├── throttle.js.map
│   │   │   │   │   │   ├── throttleTime.js
│   │   │   │   │   │   ├── throttleTime.js.map
│   │   │   │   │   │   ├── throwIfEmpty.js
│   │   │   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   │   │   ├── timeInterval.js
│   │   │   │   │   │   ├── timeInterval.js.map
│   │   │   │   │   │   ├── timeout.js
│   │   │   │   │   │   ├── timeout.js.map
│   │   │   │   │   │   ├── timeoutWith.js
│   │   │   │   │   │   ├── timeoutWith.js.map
│   │   │   │   │   │   ├── timestamp.js
│   │   │   │   │   │   ├── timestamp.js.map
│   │   │   │   │   │   ├── toArray.js
│   │   │   │   │   │   ├── toArray.js.map
│   │   │   │   │   │   ├── windowCount.js
│   │   │   │   │   │   ├── windowCount.js.map
│   │   │   │   │   │   ├── window.js
│   │   │   │   │   │   ├── window.js.map
│   │   │   │   │   │   ├── windowTime.js
│   │   │   │   │   │   ├── windowTime.js.map
│   │   │   │   │   │   ├── windowToggle.js
│   │   │   │   │   │   ├── windowToggle.js.map
│   │   │   │   │   │   ├── windowWhen.js
│   │   │   │   │   │   ├── windowWhen.js.map
│   │   │   │   │   │   ├── withLatestFrom.js
│   │   │   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   │   │   ├── zipAll.js
│   │   │   │   │   │   ├── zipAll.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   ├── zip.js.map
│   │   │   │   │   │   ├── zipWith.js
│   │   │   │   │   │   └── zipWith.js.map
│   │   │   │   │   ├── ReplaySubject.js
│   │   │   │   │   ├── ReplaySubject.js.map
│   │   │   │   │   ├── scheduled
│   │   │   │   │   │   ├── scheduleArray.js
│   │   │   │   │   │   ├── scheduleArray.js.map
│   │   │   │   │   │   ├── scheduleAsyncIterable.js
│   │   │   │   │   │   ├── scheduleAsyncIterable.js.map
│   │   │   │   │   │   ├── scheduled.js
│   │   │   │   │   │   ├── scheduled.js.map
│   │   │   │   │   │   ├── scheduleIterable.js
│   │   │   │   │   │   ├── scheduleIterable.js.map
│   │   │   │   │   │   ├── scheduleObservable.js
│   │   │   │   │   │   ├── scheduleObservable.js.map
│   │   │   │   │   │   ├── schedulePromise.js
│   │   │   │   │   │   ├── schedulePromise.js.map
│   │   │   │   │   │   ├── scheduleReadableStreamLike.js
│   │   │   │   │   │   └── scheduleReadableStreamLike.js.map
│   │   │   │   │   ├── scheduler
│   │   │   │   │   │   ├── Action.js
│   │   │   │   │   │   ├── Action.js.map
│   │   │   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   │   │   ├── animationFrame.js
│   │   │   │   │   │   ├── animationFrame.js.map
│   │   │   │   │   │   ├── animationFrameProvider.js
│   │   │   │   │   │   ├── animationFrameProvider.js.map
│   │   │   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   │   │   ├── AsapAction.js
│   │   │   │   │   │   ├── AsapAction.js.map
│   │   │   │   │   │   ├── asap.js
│   │   │   │   │   │   ├── asap.js.map
│   │   │   │   │   │   ├── AsapScheduler.js
│   │   │   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   │   │   ├── AsyncAction.js
│   │   │   │   │   │   ├── AsyncAction.js.map
│   │   │   │   │   │   ├── async.js
│   │   │   │   │   │   ├── async.js.map
│   │   │   │   │   │   ├── AsyncScheduler.js
│   │   │   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   │   │   ├── dateTimestampProvider.js
│   │   │   │   │   │   ├── dateTimestampProvider.js.map
│   │   │   │   │   │   ├── immediateProvider.js
│   │   │   │   │   │   ├── immediateProvider.js.map
│   │   │   │   │   │   ├── intervalProvider.js
│   │   │   │   │   │   ├── intervalProvider.js.map
│   │   │   │   │   │   ├── performanceTimestampProvider.js
│   │   │   │   │   │   ├── performanceTimestampProvider.js.map
│   │   │   │   │   │   ├── QueueAction.js
│   │   │   │   │   │   ├── QueueAction.js.map
│   │   │   │   │   │   ├── queue.js
│   │   │   │   │   │   ├── queue.js.map
│   │   │   │   │   │   ├── QueueScheduler.js
│   │   │   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   │   │   ├── timeoutProvider.js
│   │   │   │   │   │   ├── timeoutProvider.js.map
│   │   │   │   │   │   ├── timerHandle.js
│   │   │   │   │   │   ├── timerHandle.js.map
│   │   │   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   │   │   └── VirtualTimeScheduler.js.map
│   │   │   │   │   ├── Scheduler.js
│   │   │   │   │   ├── Scheduler.js.map
│   │   │   │   │   ├── Subject.js
│   │   │   │   │   ├── Subject.js.map
│   │   │   │   │   ├── Subscriber.js
│   │   │   │   │   ├── Subscriber.js.map
│   │   │   │   │   ├── Subscription.js
│   │   │   │   │   ├── Subscription.js.map
│   │   │   │   │   ├── symbol
│   │   │   │   │   │   ├── iterator.js
│   │   │   │   │   │   ├── iterator.js.map
│   │   │   │   │   │   ├── observable.js
│   │   │   │   │   │   └── observable.js.map
│   │   │   │   │   ├── testing
│   │   │   │   │   │   ├── ColdObservable.js
│   │   │   │   │   │   ├── ColdObservable.js.map
│   │   │   │   │   │   ├── HotObservable.js
│   │   │   │   │   │   ├── HotObservable.js.map
│   │   │   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   │   │   ├── SubscriptionLog.js
│   │   │   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   │   │   ├── TestMessage.js
│   │   │   │   │   │   ├── TestMessage.js.map
│   │   │   │   │   │   ├── TestScheduler.js
│   │   │   │   │   │   └── TestScheduler.js.map
│   │   │   │   │   ├── types.js
│   │   │   │   │   ├── types.js.map
│   │   │   │   │   ├── umd.js
│   │   │   │   │   ├── umd.js.map
│   │   │   │   │   └── util
│   │   │   │   │       ├── applyMixins.js
│   │   │   │   │       ├── applyMixins.js.map
│   │   │   │   │       ├── argsArgArrayOrObject.js
│   │   │   │   │       ├── argsArgArrayOrObject.js.map
│   │   │   │   │       ├── args.js
│   │   │   │   │       ├── args.js.map
│   │   │   │   │       ├── argsOrArgArray.js
│   │   │   │   │       ├── argsOrArgArray.js.map
│   │   │   │   │       ├── ArgumentOutOfRangeError.js
│   │   │   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │   │   │       ├── arrRemove.js
│   │   │   │   │       ├── arrRemove.js.map
│   │   │   │   │       ├── createErrorClass.js
│   │   │   │   │       ├── createErrorClass.js.map
│   │   │   │   │       ├── createObject.js
│   │   │   │   │       ├── createObject.js.map
│   │   │   │   │       ├── EmptyError.js
│   │   │   │   │       ├── EmptyError.js.map
│   │   │   │   │       ├── errorContext.js
│   │   │   │   │       ├── errorContext.js.map
│   │   │   │   │       ├── executeSchedule.js
│   │   │   │   │       ├── executeSchedule.js.map
│   │   │   │   │       ├── identity.js
│   │   │   │   │       ├── identity.js.map
│   │   │   │   │       ├── Immediate.js
│   │   │   │   │       ├── Immediate.js.map
│   │   │   │   │       ├── isArrayLike.js
│   │   │   │   │       ├── isArrayLike.js.map
│   │   │   │   │       ├── isAsyncIterable.js
│   │   │   │   │       ├── isAsyncIterable.js.map
│   │   │   │   │       ├── isDate.js
│   │   │   │   │       ├── isDate.js.map
│   │   │   │   │       ├── isFunction.js
│   │   │   │   │       ├── isFunction.js.map
│   │   │   │   │       ├── isInteropObservable.js
│   │   │   │   │       ├── isInteropObservable.js.map
│   │   │   │   │       ├── isIterable.js
│   │   │   │   │       ├── isIterable.js.map
│   │   │   │   │       ├── isObservable.js
│   │   │   │   │       ├── isObservable.js.map
│   │   │   │   │       ├── isPromise.js
│   │   │   │   │       ├── isPromise.js.map
│   │   │   │   │       ├── isReadableStreamLike.js
│   │   │   │   │       ├── isReadableStreamLike.js.map
│   │   │   │   │       ├── isScheduler.js
│   │   │   │   │       ├── isScheduler.js.map
│   │   │   │   │       ├── lift.js
│   │   │   │   │       ├── lift.js.map
│   │   │   │   │       ├── mapOneOrManyArgs.js
│   │   │   │   │       ├── mapOneOrManyArgs.js.map
│   │   │   │   │       ├── noop.js
│   │   │   │   │       ├── noop.js.map
│   │   │   │   │       ├── NotFoundError.js
│   │   │   │   │       ├── NotFoundError.js.map
│   │   │   │   │       ├── not.js
│   │   │   │   │       ├── not.js.map
│   │   │   │   │       ├── ObjectUnsubscribedError.js
│   │   │   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │   │   │       ├── pipe.js
│   │   │   │   │       ├── pipe.js.map
│   │   │   │   │       ├── reportUnhandledError.js
│   │   │   │   │       ├── reportUnhandledError.js.map
│   │   │   │   │       ├── SequenceError.js
│   │   │   │   │       ├── SequenceError.js.map
│   │   │   │   │       ├── subscribeToArray.js
│   │   │   │   │       ├── subscribeToArray.js.map
│   │   │   │   │       ├── throwUnobservableError.js
│   │   │   │   │       ├── throwUnobservableError.js.map
│   │   │   │   │       ├── UnsubscriptionError.js
│   │   │   │   │       ├── UnsubscriptionError.js.map
│   │   │   │   │       ├── workarounds.js
│   │   │   │   │       └── workarounds.js.map
│   │   │   │   ├── operators
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── testing
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   └── webSocket
│   │   │   │       ├── index.js
│   │   │   │       └── index.js.map
│   │   │   ├── esm5
│   │   │   │   ├── ajax
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── fetch
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── internal
│   │   │   │   │   ├── ajax
│   │   │   │   │   │   ├── ajax.js
│   │   │   │   │   │   ├── ajax.js.map
│   │   │   │   │   │   ├── AjaxResponse.js
│   │   │   │   │   │   ├── AjaxResponse.js.map
│   │   │   │   │   │   ├── errors.js
│   │   │   │   │   │   ├── errors.js.map
│   │   │   │   │   │   ├── getXHRResponse.js
│   │   │   │   │   │   ├── getXHRResponse.js.map
│   │   │   │   │   │   ├── types.js
│   │   │   │   │   │   └── types.js.map
│   │   │   │   │   ├── AnyCatcher.js
│   │   │   │   │   ├── AnyCatcher.js.map
│   │   │   │   │   ├── AsyncSubject.js
│   │   │   │   │   ├── AsyncSubject.js.map
│   │   │   │   │   ├── BehaviorSubject.js
│   │   │   │   │   ├── BehaviorSubject.js.map
│   │   │   │   │   ├── config.js
│   │   │   │   │   ├── config.js.map
│   │   │   │   │   ├── firstValueFrom.js
│   │   │   │   │   ├── firstValueFrom.js.map
│   │   │   │   │   ├── lastValueFrom.js
│   │   │   │   │   ├── lastValueFrom.js.map
│   │   │   │   │   ├── NotificationFactories.js
│   │   │   │   │   ├── NotificationFactories.js.map
│   │   │   │   │   ├── Notification.js
│   │   │   │   │   ├── Notification.js.map
│   │   │   │   │   ├── observable
│   │   │   │   │   │   ├── bindCallbackInternals.js
│   │   │   │   │   │   ├── bindCallbackInternals.js.map
│   │   │   │   │   │   ├── bindCallback.js
│   │   │   │   │   │   ├── bindCallback.js.map
│   │   │   │   │   │   ├── bindNodeCallback.js
│   │   │   │   │   │   ├── bindNodeCallback.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── connectable.js
│   │   │   │   │   │   ├── connectable.js.map
│   │   │   │   │   │   ├── ConnectableObservable.js
│   │   │   │   │   │   ├── ConnectableObservable.js.map
│   │   │   │   │   │   ├── defer.js
│   │   │   │   │   │   ├── defer.js.map
│   │   │   │   │   │   ├── dom
│   │   │   │   │   │   │   ├── animationFrames.js
│   │   │   │   │   │   │   ├── animationFrames.js.map
│   │   │   │   │   │   │   ├── fetch.js
│   │   │   │   │   │   │   ├── fetch.js.map
│   │   │   │   │   │   │   ├── webSocket.js
│   │   │   │   │   │   │   ├── webSocket.js.map
│   │   │   │   │   │   │   ├── WebSocketSubject.js
│   │   │   │   │   │   │   └── WebSocketSubject.js.map
│   │   │   │   │   │   ├── empty.js
│   │   │   │   │   │   ├── empty.js.map
│   │   │   │   │   │   ├── forkJoin.js
│   │   │   │   │   │   ├── forkJoin.js.map
│   │   │   │   │   │   ├── fromEvent.js
│   │   │   │   │   │   ├── fromEvent.js.map
│   │   │   │   │   │   ├── fromEventPattern.js
│   │   │   │   │   │   ├── fromEventPattern.js.map
│   │   │   │   │   │   ├── from.js
│   │   │   │   │   │   ├── from.js.map
│   │   │   │   │   │   ├── fromSubscribable.js
│   │   │   │   │   │   ├── fromSubscribable.js.map
│   │   │   │   │   │   ├── generate.js
│   │   │   │   │   │   ├── generate.js.map
│   │   │   │   │   │   ├── iif.js
│   │   │   │   │   │   ├── iif.js.map
│   │   │   │   │   │   ├── innerFrom.js
│   │   │   │   │   │   ├── innerFrom.js.map
│   │   │   │   │   │   ├── interval.js
│   │   │   │   │   │   ├── interval.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── never.js
│   │   │   │   │   │   ├── never.js.map
│   │   │   │   │   │   ├── of.js
│   │   │   │   │   │   ├── of.js.map
│   │   │   │   │   │   ├── onErrorResumeNext.js
│   │   │   │   │   │   ├── onErrorResumeNext.js.map
│   │   │   │   │   │   ├── pairs.js
│   │   │   │   │   │   ├── pairs.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── range.js
│   │   │   │   │   │   ├── range.js.map
│   │   │   │   │   │   ├── throwError.js
│   │   │   │   │   │   ├── throwError.js.map
│   │   │   │   │   │   ├── timer.js
│   │   │   │   │   │   ├── timer.js.map
│   │   │   │   │   │   ├── using.js
│   │   │   │   │   │   ├── using.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   └── zip.js.map
│   │   │   │   │   ├── Observable.js
│   │   │   │   │   ├── Observable.js.map
│   │   │   │   │   ├── Operator.js
│   │   │   │   │   ├── Operator.js.map
│   │   │   │   │   ├── operators
│   │   │   │   │   │   ├── audit.js
│   │   │   │   │   │   ├── audit.js.map
│   │   │   │   │   │   ├── auditTime.js
│   │   │   │   │   │   ├── auditTime.js.map
│   │   │   │   │   │   ├── bufferCount.js
│   │   │   │   │   │   ├── bufferCount.js.map
│   │   │   │   │   │   ├── buffer.js
│   │   │   │   │   │   ├── buffer.js.map
│   │   │   │   │   │   ├── bufferTime.js
│   │   │   │   │   │   ├── bufferTime.js.map
│   │   │   │   │   │   ├── bufferToggle.js
│   │   │   │   │   │   ├── bufferToggle.js.map
│   │   │   │   │   │   ├── bufferWhen.js
│   │   │   │   │   │   ├── bufferWhen.js.map
│   │   │   │   │   │   ├── catchError.js
│   │   │   │   │   │   ├── catchError.js.map
│   │   │   │   │   │   ├── combineAll.js
│   │   │   │   │   │   ├── combineAll.js.map
│   │   │   │   │   │   ├── combineLatestAll.js
│   │   │   │   │   │   ├── combineLatestAll.js.map
│   │   │   │   │   │   ├── combineLatest.js
│   │   │   │   │   │   ├── combineLatest.js.map
│   │   │   │   │   │   ├── combineLatestWith.js
│   │   │   │   │   │   ├── combineLatestWith.js.map
│   │   │   │   │   │   ├── concatAll.js
│   │   │   │   │   │   ├── concatAll.js.map
│   │   │   │   │   │   ├── concat.js
│   │   │   │   │   │   ├── concat.js.map
│   │   │   │   │   │   ├── concatMap.js
│   │   │   │   │   │   ├── concatMap.js.map
│   │   │   │   │   │   ├── concatMapTo.js
│   │   │   │   │   │   ├── concatMapTo.js.map
│   │   │   │   │   │   ├── concatWith.js
│   │   │   │   │   │   ├── concatWith.js.map
│   │   │   │   │   │   ├── connect.js
│   │   │   │   │   │   ├── connect.js.map
│   │   │   │   │   │   ├── count.js
│   │   │   │   │   │   ├── count.js.map
│   │   │   │   │   │   ├── debounce.js
│   │   │   │   │   │   ├── debounce.js.map
│   │   │   │   │   │   ├── debounceTime.js
│   │   │   │   │   │   ├── debounceTime.js.map
│   │   │   │   │   │   ├── defaultIfEmpty.js
│   │   │   │   │   │   ├── defaultIfEmpty.js.map
│   │   │   │   │   │   ├── delay.js
│   │   │   │   │   │   ├── delay.js.map
│   │   │   │   │   │   ├── delayWhen.js
│   │   │   │   │   │   ├── delayWhen.js.map
│   │   │   │   │   │   ├── dematerialize.js
│   │   │   │   │   │   ├── dematerialize.js.map
│   │   │   │   │   │   ├── distinct.js
│   │   │   │   │   │   ├── distinct.js.map
│   │   │   │   │   │   ├── distinctUntilChanged.js
│   │   │   │   │   │   ├── distinctUntilChanged.js.map
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js
│   │   │   │   │   │   ├── distinctUntilKeyChanged.js.map
│   │   │   │   │   │   ├── elementAt.js
│   │   │   │   │   │   ├── elementAt.js.map
│   │   │   │   │   │   ├── endWith.js
│   │   │   │   │   │   ├── endWith.js.map
│   │   │   │   │   │   ├── every.js
│   │   │   │   │   │   ├── every.js.map
│   │   │   │   │   │   ├── exhaustAll.js
│   │   │   │   │   │   ├── exhaustAll.js.map
│   │   │   │   │   │   ├── exhaust.js
│   │   │   │   │   │   ├── exhaust.js.map
│   │   │   │   │   │   ├── exhaustMap.js
│   │   │   │   │   │   ├── exhaustMap.js.map
│   │   │   │   │   │   ├── expand.js
│   │   │   │   │   │   ├── expand.js.map
│   │   │   │   │   │   ├── filter.js
│   │   │   │   │   │   ├── filter.js.map
│   │   │   │   │   │   ├── finalize.js
│   │   │   │   │   │   ├── finalize.js.map
│   │   │   │   │   │   ├── findIndex.js
│   │   │   │   │   │   ├── findIndex.js.map
│   │   │   │   │   │   ├── find.js
│   │   │   │   │   │   ├── find.js.map
│   │   │   │   │   │   ├── first.js
│   │   │   │   │   │   ├── first.js.map
│   │   │   │   │   │   ├── flatMap.js
│   │   │   │   │   │   ├── flatMap.js.map
│   │   │   │   │   │   ├── groupBy.js
│   │   │   │   │   │   ├── groupBy.js.map
│   │   │   │   │   │   ├── ignoreElements.js
│   │   │   │   │   │   ├── ignoreElements.js.map
│   │   │   │   │   │   ├── isEmpty.js
│   │   │   │   │   │   ├── isEmpty.js.map
│   │   │   │   │   │   ├── joinAllInternals.js
│   │   │   │   │   │   ├── joinAllInternals.js.map
│   │   │   │   │   │   ├── last.js
│   │   │   │   │   │   ├── last.js.map
│   │   │   │   │   │   ├── map.js
│   │   │   │   │   │   ├── map.js.map
│   │   │   │   │   │   ├── mapTo.js
│   │   │   │   │   │   ├── mapTo.js.map
│   │   │   │   │   │   ├── materialize.js
│   │   │   │   │   │   ├── materialize.js.map
│   │   │   │   │   │   ├── max.js
│   │   │   │   │   │   ├── max.js.map
│   │   │   │   │   │   ├── mergeAll.js
│   │   │   │   │   │   ├── mergeAll.js.map
│   │   │   │   │   │   ├── mergeInternals.js
│   │   │   │   │   │   ├── mergeInternals.js.map
│   │   │   │   │   │   ├── merge.js
│   │   │   │   │   │   ├── merge.js.map
│   │   │   │   │   │   ├── mergeMap.js
│   │   │   │   │   │   ├── mergeMap.js.map
│   │   │   │   │   │   ├── mergeMapTo.js
│   │   │   │   │   │   ├── mergeMapTo.js.map
│   │   │   │   │   │   ├── mergeScan.js
│   │   │   │   │   │   ├── mergeScan.js.map
│   │   │   │   │   │   ├── mergeWith.js
│   │   │   │   │   │   ├── mergeWith.js.map
│   │   │   │   │   │   ├── min.js
│   │   │   │   │   │   ├── min.js.map
│   │   │   │   │   │   ├── multicast.js
│   │   │   │   │   │   ├── multicast.js.map
│   │   │   │   │   │   ├── observeOn.js
│   │   │   │   │   │   ├── observeOn.js.map
│   │   │   │   │   │   ├── onErrorResumeNextWith.js
│   │   │   │   │   │   ├── onErrorResumeNextWith.js.map
│   │   │   │   │   │   ├── OperatorSubscriber.js
│   │   │   │   │   │   ├── OperatorSubscriber.js.map
│   │   │   │   │   │   ├── pairwise.js
│   │   │   │   │   │   ├── pairwise.js.map
│   │   │   │   │   │   ├── partition.js
│   │   │   │   │   │   ├── partition.js.map
│   │   │   │   │   │   ├── pluck.js
│   │   │   │   │   │   ├── pluck.js.map
│   │   │   │   │   │   ├── publishBehavior.js
│   │   │   │   │   │   ├── publishBehavior.js.map
│   │   │   │   │   │   ├── publish.js
│   │   │   │   │   │   ├── publish.js.map
│   │   │   │   │   │   ├── publishLast.js
│   │   │   │   │   │   ├── publishLast.js.map
│   │   │   │   │   │   ├── publishReplay.js
│   │   │   │   │   │   ├── publishReplay.js.map
│   │   │   │   │   │   ├── race.js
│   │   │   │   │   │   ├── race.js.map
│   │   │   │   │   │   ├── raceWith.js
│   │   │   │   │   │   ├── raceWith.js.map
│   │   │   │   │   │   ├── reduce.js
│   │   │   │   │   │   ├── reduce.js.map
│   │   │   │   │   │   ├── refCount.js
│   │   │   │   │   │   ├── refCount.js.map
│   │   │   │   │   │   ├── repeat.js
│   │   │   │   │   │   ├── repeat.js.map
│   │   │   │   │   │   ├── repeatWhen.js
│   │   │   │   │   │   ├── repeatWhen.js.map
│   │   │   │   │   │   ├── retry.js
│   │   │   │   │   │   ├── retry.js.map
│   │   │   │   │   │   ├── retryWhen.js
│   │   │   │   │   │   ├── retryWhen.js.map
│   │   │   │   │   │   ├── sample.js
│   │   │   │   │   │   ├── sample.js.map
│   │   │   │   │   │   ├── sampleTime.js
│   │   │   │   │   │   ├── sampleTime.js.map
│   │   │   │   │   │   ├── scanInternals.js
│   │   │   │   │   │   ├── scanInternals.js.map
│   │   │   │   │   │   ├── scan.js
│   │   │   │   │   │   ├── scan.js.map
│   │   │   │   │   │   ├── sequenceEqual.js
│   │   │   │   │   │   ├── sequenceEqual.js.map
│   │   │   │   │   │   ├── share.js
│   │   │   │   │   │   ├── share.js.map
│   │   │   │   │   │   ├── shareReplay.js
│   │   │   │   │   │   ├── shareReplay.js.map
│   │   │   │   │   │   ├── single.js
│   │   │   │   │   │   ├── single.js.map
│   │   │   │   │   │   ├── skip.js
│   │   │   │   │   │   ├── skip.js.map
│   │   │   │   │   │   ├── skipLast.js
│   │   │   │   │   │   ├── skipLast.js.map
│   │   │   │   │   │   ├── skipUntil.js
│   │   │   │   │   │   ├── skipUntil.js.map
│   │   │   │   │   │   ├── skipWhile.js
│   │   │   │   │   │   ├── skipWhile.js.map
│   │   │   │   │   │   ├── startWith.js
│   │   │   │   │   │   ├── startWith.js.map
│   │   │   │   │   │   ├── subscribeOn.js
│   │   │   │   │   │   ├── subscribeOn.js.map
│   │   │   │   │   │   ├── switchAll.js
│   │   │   │   │   │   ├── switchAll.js.map
│   │   │   │   │   │   ├── switchMap.js
│   │   │   │   │   │   ├── switchMap.js.map
│   │   │   │   │   │   ├── switchMapTo.js
│   │   │   │   │   │   ├── switchMapTo.js.map
│   │   │   │   │   │   ├── switchScan.js
│   │   │   │   │   │   ├── switchScan.js.map
│   │   │   │   │   │   ├── take.js
│   │   │   │   │   │   ├── take.js.map
│   │   │   │   │   │   ├── takeLast.js
│   │   │   │   │   │   ├── takeLast.js.map
│   │   │   │   │   │   ├── takeUntil.js
│   │   │   │   │   │   ├── takeUntil.js.map
│   │   │   │   │   │   ├── takeWhile.js
│   │   │   │   │   │   ├── takeWhile.js.map
│   │   │   │   │   │   ├── tap.js
│   │   │   │   │   │   ├── tap.js.map
│   │   │   │   │   │   ├── throttle.js
│   │   │   │   │   │   ├── throttle.js.map
│   │   │   │   │   │   ├── throttleTime.js
│   │   │   │   │   │   ├── throttleTime.js.map
│   │   │   │   │   │   ├── throwIfEmpty.js
│   │   │   │   │   │   ├── throwIfEmpty.js.map
│   │   │   │   │   │   ├── timeInterval.js
│   │   │   │   │   │   ├── timeInterval.js.map
│   │   │   │   │   │   ├── timeout.js
│   │   │   │   │   │   ├── timeout.js.map
│   │   │   │   │   │   ├── timeoutWith.js
│   │   │   │   │   │   ├── timeoutWith.js.map
│   │   │   │   │   │   ├── timestamp.js
│   │   │   │   │   │   ├── timestamp.js.map
│   │   │   │   │   │   ├── toArray.js
│   │   │   │   │   │   ├── toArray.js.map
│   │   │   │   │   │   ├── windowCount.js
│   │   │   │   │   │   ├── windowCount.js.map
│   │   │   │   │   │   ├── window.js
│   │   │   │   │   │   ├── window.js.map
│   │   │   │   │   │   ├── windowTime.js
│   │   │   │   │   │   ├── windowTime.js.map
│   │   │   │   │   │   ├── windowToggle.js
│   │   │   │   │   │   ├── windowToggle.js.map
│   │   │   │   │   │   ├── windowWhen.js
│   │   │   │   │   │   ├── windowWhen.js.map
│   │   │   │   │   │   ├── withLatestFrom.js
│   │   │   │   │   │   ├── withLatestFrom.js.map
│   │   │   │   │   │   ├── zipAll.js
│   │   │   │   │   │   ├── zipAll.js.map
│   │   │   │   │   │   ├── zip.js
│   │   │   │   │   │   ├── zip.js.map
│   │   │   │   │   │   ├── zipWith.js
│   │   │   │   │   │   └── zipWith.js.map
│   │   │   │   │   ├── ReplaySubject.js
│   │   │   │   │   ├── ReplaySubject.js.map
│   │   │   │   │   ├── scheduled
│   │   │   │   │   │   ├── scheduleArray.js
│   │   │   │   │   │   ├── scheduleArray.js.map
│   │   │   │   │   │   ├── scheduleAsyncIterable.js
│   │   │   │   │   │   ├── scheduleAsyncIterable.js.map
│   │   │   │   │   │   ├── scheduled.js
│   │   │   │   │   │   ├── scheduled.js.map
│   │   │   │   │   │   ├── scheduleIterable.js
│   │   │   │   │   │   ├── scheduleIterable.js.map
│   │   │   │   │   │   ├── scheduleObservable.js
│   │   │   │   │   │   ├── scheduleObservable.js.map
│   │   │   │   │   │   ├── schedulePromise.js
│   │   │   │   │   │   ├── schedulePromise.js.map
│   │   │   │   │   │   ├── scheduleReadableStreamLike.js
│   │   │   │   │   │   └── scheduleReadableStreamLike.js.map
│   │   │   │   │   ├── scheduler
│   │   │   │   │   │   ├── Action.js
│   │   │   │   │   │   ├── Action.js.map
│   │   │   │   │   │   ├── AnimationFrameAction.js
│   │   │   │   │   │   ├── AnimationFrameAction.js.map
│   │   │   │   │   │   ├── animationFrame.js
│   │   │   │   │   │   ├── animationFrame.js.map
│   │   │   │   │   │   ├── animationFrameProvider.js
│   │   │   │   │   │   ├── animationFrameProvider.js.map
│   │   │   │   │   │   ├── AnimationFrameScheduler.js
│   │   │   │   │   │   ├── AnimationFrameScheduler.js.map
│   │   │   │   │   │   ├── AsapAction.js
│   │   │   │   │   │   ├── AsapAction.js.map
│   │   │   │   │   │   ├── asap.js
│   │   │   │   │   │   ├── asap.js.map
│   │   │   │   │   │   ├── AsapScheduler.js
│   │   │   │   │   │   ├── AsapScheduler.js.map
│   │   │   │   │   │   ├── AsyncAction.js
│   │   │   │   │   │   ├── AsyncAction.js.map
│   │   │   │   │   │   ├── async.js
│   │   │   │   │   │   ├── async.js.map
│   │   │   │   │   │   ├── AsyncScheduler.js
│   │   │   │   │   │   ├── AsyncScheduler.js.map
│   │   │   │   │   │   ├── dateTimestampProvider.js
│   │   │   │   │   │   ├── dateTimestampProvider.js.map
│   │   │   │   │   │   ├── immediateProvider.js
│   │   │   │   │   │   ├── immediateProvider.js.map
│   │   │   │   │   │   ├── intervalProvider.js
│   │   │   │   │   │   ├── intervalProvider.js.map
│   │   │   │   │   │   ├── performanceTimestampProvider.js
│   │   │   │   │   │   ├── performanceTimestampProvider.js.map
│   │   │   │   │   │   ├── QueueAction.js
│   │   │   │   │   │   ├── QueueAction.js.map
│   │   │   │   │   │   ├── queue.js
│   │   │   │   │   │   ├── queue.js.map
│   │   │   │   │   │   ├── QueueScheduler.js
│   │   │   │   │   │   ├── QueueScheduler.js.map
│   │   │   │   │   │   ├── timeoutProvider.js
│   │   │   │   │   │   ├── timeoutProvider.js.map
│   │   │   │   │   │   ├── timerHandle.js
│   │   │   │   │   │   ├── timerHandle.js.map
│   │   │   │   │   │   ├── VirtualTimeScheduler.js
│   │   │   │   │   │   └── VirtualTimeScheduler.js.map
│   │   │   │   │   ├── Scheduler.js
│   │   │   │   │   ├── Scheduler.js.map
│   │   │   │   │   ├── Subject.js
│   │   │   │   │   ├── Subject.js.map
│   │   │   │   │   ├── Subscriber.js
│   │   │   │   │   ├── Subscriber.js.map
│   │   │   │   │   ├── Subscription.js
│   │   │   │   │   ├── Subscription.js.map
│   │   │   │   │   ├── symbol
│   │   │   │   │   │   ├── iterator.js
│   │   │   │   │   │   ├── iterator.js.map
│   │   │   │   │   │   ├── observable.js
│   │   │   │   │   │   └── observable.js.map
│   │   │   │   │   ├── testing
│   │   │   │   │   │   ├── ColdObservable.js
│   │   │   │   │   │   ├── ColdObservable.js.map
│   │   │   │   │   │   ├── HotObservable.js
│   │   │   │   │   │   ├── HotObservable.js.map
│   │   │   │   │   │   ├── SubscriptionLoggable.js
│   │   │   │   │   │   ├── SubscriptionLoggable.js.map
│   │   │   │   │   │   ├── SubscriptionLog.js
│   │   │   │   │   │   ├── SubscriptionLog.js.map
│   │   │   │   │   │   ├── TestMessage.js
│   │   │   │   │   │   ├── TestMessage.js.map
│   │   │   │   │   │   ├── TestScheduler.js
│   │   │   │   │   │   └── TestScheduler.js.map
│   │   │   │   │   ├── types.js
│   │   │   │   │   ├── types.js.map
│   │   │   │   │   └── util
│   │   │   │   │       ├── applyMixins.js
│   │   │   │   │       ├── applyMixins.js.map
│   │   │   │   │       ├── argsArgArrayOrObject.js
│   │   │   │   │       ├── argsArgArrayOrObject.js.map
│   │   │   │   │       ├── args.js
│   │   │   │   │       ├── args.js.map
│   │   │   │   │       ├── argsOrArgArray.js
│   │   │   │   │       ├── argsOrArgArray.js.map
│   │   │   │   │       ├── ArgumentOutOfRangeError.js
│   │   │   │   │       ├── ArgumentOutOfRangeError.js.map
│   │   │   │   │       ├── arrRemove.js
│   │   │   │   │       ├── arrRemove.js.map
│   │   │   │   │       ├── createErrorClass.js
│   │   │   │   │       ├── createErrorClass.js.map
│   │   │   │   │       ├── createObject.js
│   │   │   │   │       ├── createObject.js.map
│   │   │   │   │       ├── EmptyError.js
│   │   │   │   │       ├── EmptyError.js.map
│   │   │   │   │       ├── errorContext.js
│   │   │   │   │       ├── errorContext.js.map
│   │   │   │   │       ├── executeSchedule.js
│   │   │   │   │       ├── executeSchedule.js.map
│   │   │   │   │       ├── identity.js
│   │   │   │   │       ├── identity.js.map
│   │   │   │   │       ├── Immediate.js
│   │   │   │   │       ├── Immediate.js.map
│   │   │   │   │       ├── isArrayLike.js
│   │   │   │   │       ├── isArrayLike.js.map
│   │   │   │   │       ├── isAsyncIterable.js
│   │   │   │   │       ├── isAsyncIterable.js.map
│   │   │   │   │       ├── isDate.js
│   │   │   │   │       ├── isDate.js.map
│   │   │   │   │       ├── isFunction.js
│   │   │   │   │       ├── isFunction.js.map
│   │   │   │   │       ├── isInteropObservable.js
│   │   │   │   │       ├── isInteropObservable.js.map
│   │   │   │   │       ├── isIterable.js
│   │   │   │   │       ├── isIterable.js.map
│   │   │   │   │       ├── isObservable.js
│   │   │   │   │       ├── isObservable.js.map
│   │   │   │   │       ├── isPromise.js
│   │   │   │   │       ├── isPromise.js.map
│   │   │   │   │       ├── isReadableStreamLike.js
│   │   │   │   │       ├── isReadableStreamLike.js.map
│   │   │   │   │       ├── isScheduler.js
│   │   │   │   │       ├── isScheduler.js.map
│   │   │   │   │       ├── lift.js
│   │   │   │   │       ├── lift.js.map
│   │   │   │   │       ├── mapOneOrManyArgs.js
│   │   │   │   │       ├── mapOneOrManyArgs.js.map
│   │   │   │   │       ├── noop.js
│   │   │   │   │       ├── noop.js.map
│   │   │   │   │       ├── NotFoundError.js
│   │   │   │   │       ├── NotFoundError.js.map
│   │   │   │   │       ├── not.js
│   │   │   │   │       ├── not.js.map
│   │   │   │   │       ├── ObjectUnsubscribedError.js
│   │   │   │   │       ├── ObjectUnsubscribedError.js.map
│   │   │   │   │       ├── pipe.js
│   │   │   │   │       ├── pipe.js.map
│   │   │   │   │       ├── reportUnhandledError.js
│   │   │   │   │       ├── reportUnhandledError.js.map
│   │   │   │   │       ├── SequenceError.js
│   │   │   │   │       ├── SequenceError.js.map
│   │   │   │   │       ├── subscribeToArray.js
│   │   │   │   │       ├── subscribeToArray.js.map
│   │   │   │   │       ├── throwUnobservableError.js
│   │   │   │   │       ├── throwUnobservableError.js.map
│   │   │   │   │       ├── UnsubscriptionError.js
│   │   │   │   │       ├── UnsubscriptionError.js.map
│   │   │   │   │       ├── workarounds.js
│   │   │   │   │       └── workarounds.js.map
│   │   │   │   ├── operators
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   ├── testing
│   │   │   │   │   ├── index.js
│   │   │   │   │   └── index.js.map
│   │   │   │   └── webSocket
│   │   │   │       ├── index.js
│   │   │   │       └── index.js.map
│   │   │   └── types
│   │   │       ├── ajax
│   │   │       │   ├── index.d.ts
│   │   │       │   └── index.d.ts.map
│   │   │       ├── fetch
│   │   │       │   ├── index.d.ts
│   │   │       │   └── index.d.ts.map
│   │   │       ├── index.d.ts
│   │   │       ├── index.d.ts.map
│   │   │       ├── internal
│   │   │       │   ├── ajax
│   │   │       │   │   ├── ajax.d.ts
│   │   │       │   │   ├── ajax.d.ts.map
│   │   │       │   │   ├── AjaxResponse.d.ts
│   │   │       │   │   ├── AjaxResponse.d.ts.map
│   │   │       │   │   ├── errors.d.ts
│   │   │       │   │   ├── errors.d.ts.map
│   │   │       │   │   ├── getXHRResponse.d.ts
│   │   │       │   │   ├── getXHRResponse.d.ts.map
│   │   │       │   │   ├── types.d.ts
│   │   │       │   │   └── types.d.ts.map
│   │   │       │   ├── AnyCatcher.d.ts
│   │   │       │   ├── AnyCatcher.d.ts.map
│   │   │       │   ├── AsyncSubject.d.ts
│   │   │       │   ├── AsyncSubject.d.ts.map
│   │   │       │   ├── BehaviorSubject.d.ts
│   │   │       │   ├── BehaviorSubject.d.ts.map
│   │   │       │   ├── config.d.ts
│   │   │       │   ├── config.d.ts.map
│   │   │       │   ├── firstValueFrom.d.ts
│   │   │       │   ├── firstValueFrom.d.ts.map
│   │   │       │   ├── lastValueFrom.d.ts
│   │   │       │   ├── lastValueFrom.d.ts.map
│   │   │       │   ├── Notification.d.ts
│   │   │       │   ├── Notification.d.ts.map
│   │   │       │   ├── NotificationFactories.d.ts
│   │   │       │   ├── NotificationFactories.d.ts.map
│   │   │       │   ├── observable
│   │   │       │   │   ├── bindCallback.d.ts
│   │   │       │   │   ├── bindCallback.d.ts.map
│   │   │       │   │   ├── bindCallbackInternals.d.ts
│   │   │       │   │   ├── bindCallbackInternals.d.ts.map
│   │   │       │   │   ├── bindNodeCallback.d.ts
│   │   │       │   │   ├── bindNodeCallback.d.ts.map
│   │   │       │   │   ├── combineLatest.d.ts
│   │   │       │   │   ├── combineLatest.d.ts.map
│   │   │       │   │   ├── concat.d.ts
│   │   │       │   │   ├── concat.d.ts.map
│   │   │       │   │   ├── connectable.d.ts
│   │   │       │   │   ├── connectable.d.ts.map
│   │   │       │   │   ├── ConnectableObservable.d.ts
│   │   │       │   │   ├── ConnectableObservable.d.ts.map
│   │   │       │   │   ├── defer.d.ts
│   │   │       │   │   ├── defer.d.ts.map
│   │   │       │   │   ├── dom
│   │   │       │   │   │   ├── animationFrames.d.ts
│   │   │       │   │   │   ├── animationFrames.d.ts.map
│   │   │       │   │   │   ├── fetch.d.ts
│   │   │       │   │   │   ├── fetch.d.ts.map
│   │   │       │   │   │   ├── webSocket.d.ts
│   │   │       │   │   │   ├── webSocket.d.ts.map
│   │   │       │   │   │   ├── WebSocketSubject.d.ts
│   │   │       │   │   │   └── WebSocketSubject.d.ts.map
│   │   │       │   │   ├── empty.d.ts
│   │   │       │   │   ├── empty.d.ts.map
│   │   │       │   │   ├── forkJoin.d.ts
│   │   │       │   │   ├── forkJoin.d.ts.map
│   │   │       │   │   ├── from.d.ts
│   │   │       │   │   ├── from.d.ts.map
│   │   │       │   │   ├── fromEvent.d.ts
│   │   │       │   │   ├── fromEvent.d.ts.map
│   │   │       │   │   ├── fromEventPattern.d.ts
│   │   │       │   │   ├── fromEventPattern.d.ts.map
│   │   │       │   │   ├── fromSubscribable.d.ts
│   │   │       │   │   ├── fromSubscribable.d.ts.map
│   │   │       │   │   ├── generate.d.ts
│   │   │       │   │   ├── generate.d.ts.map
│   │   │       │   │   ├── iif.d.ts
│   │   │       │   │   ├── iif.d.ts.map
│   │   │       │   │   ├── innerFrom.d.ts
│   │   │       │   │   ├── innerFrom.d.ts.map
│   │   │       │   │   ├── interval.d.ts
│   │   │       │   │   ├── interval.d.ts.map
│   │   │       │   │   ├── merge.d.ts
│   │   │       │   │   ├── merge.d.ts.map
│   │   │       │   │   ├── never.d.ts
│   │   │       │   │   ├── never.d.ts.map
│   │   │       │   │   ├── of.d.ts
│   │   │       │   │   ├── of.d.ts.map
│   │   │       │   │   ├── onErrorResumeNext.d.ts
│   │   │       │   │   ├── onErrorResumeNext.d.ts.map
│   │   │       │   │   ├── pairs.d.ts
│   │   │       │   │   ├── pairs.d.ts.map
│   │   │       │   │   ├── partition.d.ts
│   │   │       │   │   ├── partition.d.ts.map
│   │   │       │   │   ├── race.d.ts
│   │   │       │   │   ├── race.d.ts.map
│   │   │       │   │   ├── range.d.ts
│   │   │       │   │   ├── range.d.ts.map
│   │   │       │   │   ├── throwError.d.ts
│   │   │       │   │   ├── throwError.d.ts.map
│   │   │       │   │   ├── timer.d.ts
│   │   │       │   │   ├── timer.d.ts.map
│   │   │       │   │   ├── using.d.ts
│   │   │       │   │   ├── using.d.ts.map
│   │   │       │   │   ├── zip.d.ts
│   │   │       │   │   └── zip.d.ts.map
│   │   │       │   ├── Observable.d.ts
│   │   │       │   ├── Observable.d.ts.map
│   │   │       │   ├── Operator.d.ts
│   │   │       │   ├── Operator.d.ts.map
│   │   │       │   ├── operators
│   │   │       │   │   ├── audit.d.ts
│   │   │       │   │   ├── audit.d.ts.map
│   │   │       │   │   ├── auditTime.d.ts
│   │   │       │   │   ├── auditTime.d.ts.map
│   │   │       │   │   ├── bufferCount.d.ts
│   │   │       │   │   ├── bufferCount.d.ts.map
│   │   │       │   │   ├── buffer.d.ts
│   │   │       │   │   ├── buffer.d.ts.map
│   │   │       │   │   ├── bufferTime.d.ts
│   │   │       │   │   ├── bufferTime.d.ts.map
│   │   │       │   │   ├── bufferToggle.d.ts
│   │   │       │   │   ├── bufferToggle.d.ts.map
│   │   │       │   │   ├── bufferWhen.d.ts
│   │   │       │   │   ├── bufferWhen.d.ts.map
│   │   │       │   │   ├── catchError.d.ts
│   │   │       │   │   ├── catchError.d.ts.map
│   │   │       │   │   ├── combineAll.d.ts
│   │   │       │   │   ├── combineAll.d.ts.map
│   │   │       │   │   ├── combineLatestAll.d.ts
│   │   │       │   │   ├── combineLatestAll.d.ts.map
│   │   │       │   │   ├── combineLatest.d.ts
│   │   │       │   │   ├── combineLatest.d.ts.map
│   │   │       │   │   ├── combineLatestWith.d.ts
│   │   │       │   │   ├── combineLatestWith.d.ts.map
│   │   │       │   │   ├── concatAll.d.ts
│   │   │       │   │   ├── concatAll.d.ts.map
│   │   │       │   │   ├── concat.d.ts
│   │   │       │   │   ├── concat.d.ts.map
│   │   │       │   │   ├── concatMap.d.ts
│   │   │       │   │   ├── concatMap.d.ts.map
│   │   │       │   │   ├── concatMapTo.d.ts
│   │   │       │   │   ├── concatMapTo.d.ts.map
│   │   │       │   │   ├── concatWith.d.ts
│   │   │       │   │   ├── concatWith.d.ts.map
│   │   │       │   │   ├── connect.d.ts
│   │   │       │   │   ├── connect.d.ts.map
│   │   │       │   │   ├── count.d.ts
│   │   │       │   │   ├── count.d.ts.map
│   │   │       │   │   ├── debounce.d.ts
│   │   │       │   │   ├── debounce.d.ts.map
│   │   │       │   │   ├── debounceTime.d.ts
│   │   │       │   │   ├── debounceTime.d.ts.map
│   │   │       │   │   ├── defaultIfEmpty.d.ts
│   │   │       │   │   ├── defaultIfEmpty.d.ts.map
│   │   │       │   │   ├── delay.d.ts
│   │   │       │   │   ├── delay.d.ts.map
│   │   │       │   │   ├── delayWhen.d.ts
│   │   │       │   │   ├── delayWhen.d.ts.map
│   │   │       │   │   ├── dematerialize.d.ts
│   │   │       │   │   ├── dematerialize.d.ts.map
│   │   │       │   │   ├── distinct.d.ts
│   │   │       │   │   ├── distinct.d.ts.map
│   │   │       │   │   ├── distinctUntilChanged.d.ts
│   │   │       │   │   ├── distinctUntilChanged.d.ts.map
│   │   │       │   │   ├── distinctUntilKeyChanged.d.ts
│   │   │       │   │   ├── distinctUntilKeyChanged.d.ts.map
│   │   │       │   │   ├── elementAt.d.ts
│   │   │       │   │   ├── elementAt.d.ts.map
│   │   │       │   │   ├── endWith.d.ts
│   │   │       │   │   ├── endWith.d.ts.map
│   │   │       │   │   ├── every.d.ts
│   │   │       │   │   ├── every.d.ts.map
│   │   │       │   │   ├── exhaustAll.d.ts
│   │   │       │   │   ├── exhaustAll.d.ts.map
│   │   │       │   │   ├── exhaust.d.ts
│   │   │       │   │   ├── exhaust.d.ts.map
│   │   │       │   │   ├── exhaustMap.d.ts
│   │   │       │   │   ├── exhaustMap.d.ts.map
│   │   │       │   │   ├── expand.d.ts
│   │   │       │   │   ├── expand.d.ts.map
│   │   │       │   │   ├── filter.d.ts
│   │   │       │   │   ├── filter.d.ts.map
│   │   │       │   │   ├── finalize.d.ts
│   │   │       │   │   ├── finalize.d.ts.map
│   │   │       │   │   ├── find.d.ts
│   │   │       │   │   ├── find.d.ts.map
│   │   │       │   │   ├── findIndex.d.ts
│   │   │       │   │   ├── findIndex.d.ts.map
│   │   │       │   │   ├── first.d.ts
│   │   │       │   │   ├── first.d.ts.map
│   │   │       │   │   ├── flatMap.d.ts
│   │   │       │   │   ├── flatMap.d.ts.map
│   │   │       │   │   ├── groupBy.d.ts
│   │   │       │   │   ├── groupBy.d.ts.map
│   │   │       │   │   ├── ignoreElements.d.ts
│   │   │       │   │   ├── ignoreElements.d.ts.map
│   │   │       │   │   ├── isEmpty.d.ts
│   │   │       │   │   ├── isEmpty.d.ts.map
│   │   │       │   │   ├── joinAllInternals.d.ts
│   │   │       │   │   ├── joinAllInternals.d.ts.map
│   │   │       │   │   ├── last.d.ts
│   │   │       │   │   ├── last.d.ts.map
│   │   │       │   │   ├── map.d.ts
│   │   │       │   │   ├── map.d.ts.map
│   │   │       │   │   ├── mapTo.d.ts
│   │   │       │   │   ├── mapTo.d.ts.map
│   │   │       │   │   ├── materialize.d.ts
│   │   │       │   │   ├── materialize.d.ts.map
│   │   │       │   │   ├── max.d.ts
│   │   │       │   │   ├── max.d.ts.map
│   │   │       │   │   ├── mergeAll.d.ts
│   │   │       │   │   ├── mergeAll.d.ts.map
│   │   │       │   │   ├── merge.d.ts
│   │   │       │   │   ├── merge.d.ts.map
│   │   │       │   │   ├── mergeInternals.d.ts
│   │   │       │   │   ├── mergeInternals.d.ts.map
│   │   │       │   │   ├── mergeMap.d.ts
│   │   │       │   │   ├── mergeMap.d.ts.map
│   │   │       │   │   ├── mergeMapTo.d.ts
│   │   │       │   │   ├── mergeMapTo.d.ts.map
│   │   │       │   │   ├── mergeScan.d.ts
│   │   │       │   │   ├── mergeScan.d.ts.map
│   │   │       │   │   ├── mergeWith.d.ts
│   │   │       │   │   ├── mergeWith.d.ts.map
│   │   │       │   │   ├── min.d.ts
│   │   │       │   │   ├── min.d.ts.map
│   │   │       │   │   ├── multicast.d.ts
│   │   │       │   │   ├── multicast.d.ts.map
│   │   │       │   │   ├── observeOn.d.ts
│   │   │       │   │   ├── observeOn.d.ts.map
│   │   │       │   │   ├── onErrorResumeNextWith.d.ts
│   │   │       │   │   ├── onErrorResumeNextWith.d.ts.map
│   │   │       │   │   ├── OperatorSubscriber.d.ts
│   │   │       │   │   ├── OperatorSubscriber.d.ts.map
│   │   │       │   │   ├── pairwise.d.ts
│   │   │       │   │   ├── pairwise.d.ts.map
│   │   │       │   │   ├── partition.d.ts
│   │   │       │   │   ├── partition.d.ts.map
│   │   │       │   │   ├── pluck.d.ts
│   │   │       │   │   ├── pluck.d.ts.map
│   │   │       │   │   ├── publishBehavior.d.ts
│   │   │       │   │   ├── publishBehavior.d.ts.map
│   │   │       │   │   ├── publish.d.ts
│   │   │       │   │   ├── publish.d.ts.map
│   │   │       │   │   ├── publishLast.d.ts
│   │   │       │   │   ├── publishLast.d.ts.map
│   │   │       │   │   ├── publishReplay.d.ts
│   │   │       │   │   ├── publishReplay.d.ts.map
│   │   │       │   │   ├── race.d.ts
│   │   │       │   │   ├── race.d.ts.map
│   │   │       │   │   ├── raceWith.d.ts
│   │   │       │   │   ├── raceWith.d.ts.map
│   │   │       │   │   ├── reduce.d.ts
│   │   │       │   │   ├── reduce.d.ts.map
│   │   │       │   │   ├── refCount.d.ts
│   │   │       │   │   ├── refCount.d.ts.map
│   │   │       │   │   ├── repeat.d.ts
│   │   │       │   │   ├── repeat.d.ts.map
│   │   │       │   │   ├── repeatWhen.d.ts
│   │   │       │   │   ├── repeatWhen.d.ts.map
│   │   │       │   │   ├── retry.d.ts
│   │   │       │   │   ├── retry.d.ts.map
│   │   │       │   │   ├── retryWhen.d.ts
│   │   │       │   │   ├── retryWhen.d.ts.map
│   │   │       │   │   ├── sample.d.ts
│   │   │       │   │   ├── sample.d.ts.map
│   │   │       │   │   ├── sampleTime.d.ts
│   │   │       │   │   ├── sampleTime.d.ts.map
│   │   │       │   │   ├── scan.d.ts
│   │   │       │   │   ├── scan.d.ts.map
│   │   │       │   │   ├── scanInternals.d.ts
│   │   │       │   │   ├── scanInternals.d.ts.map
│   │   │       │   │   ├── sequenceEqual.d.ts
│   │   │       │   │   ├── sequenceEqual.d.ts.map
│   │   │       │   │   ├── share.d.ts
│   │   │       │   │   ├── share.d.ts.map
│   │   │       │   │   ├── shareReplay.d.ts
│   │   │       │   │   ├── shareReplay.d.ts.map
│   │   │       │   │   ├── single.d.ts
│   │   │       │   │   ├── single.d.ts.map
│   │   │       │   │   ├── skip.d.ts
│   │   │       │   │   ├── skip.d.ts.map
│   │   │       │   │   ├── skipLast.d.ts
│   │   │       │   │   ├── skipLast.d.ts.map
│   │   │       │   │   ├── skipUntil.d.ts
│   │   │       │   │   ├── skipUntil.d.ts.map
│   │   │       │   │   ├── skipWhile.d.ts
│   │   │       │   │   ├── skipWhile.d.ts.map
│   │   │       │   │   ├── startWith.d.ts
│   │   │       │   │   ├── startWith.d.ts.map
│   │   │       │   │   ├── subscribeOn.d.ts
│   │   │       │   │   ├── subscribeOn.d.ts.map
│   │   │       │   │   ├── switchAll.d.ts
│   │   │       │   │   ├── switchAll.d.ts.map
│   │   │       │   │   ├── switchMap.d.ts
│   │   │       │   │   ├── switchMap.d.ts.map
│   │   │       │   │   ├── switchMapTo.d.ts
│   │   │       │   │   ├── switchMapTo.d.ts.map
│   │   │       │   │   ├── switchScan.d.ts
│   │   │       │   │   ├── switchScan.d.ts.map
│   │   │       │   │   ├── take.d.ts
│   │   │       │   │   ├── take.d.ts.map
│   │   │       │   │   ├── takeLast.d.ts
│   │   │       │   │   ├── takeLast.d.ts.map
│   │   │       │   │   ├── takeUntil.d.ts
│   │   │       │   │   ├── takeUntil.d.ts.map
│   │   │       │   │   ├── takeWhile.d.ts
│   │   │       │   │   ├── takeWhile.d.ts.map
│   │   │       │   │   ├── tap.d.ts
│   │   │       │   │   ├── tap.d.ts.map
│   │   │       │   │   ├── throttle.d.ts
│   │   │       │   │   ├── throttle.d.ts.map
│   │   │       │   │   ├── throttleTime.d.ts
│   │   │       │   │   ├── throttleTime.d.ts.map
│   │   │       │   │   ├── throwIfEmpty.d.ts
│   │   │       │   │   ├── throwIfEmpty.d.ts.map
│   │   │       │   │   ├── timeInterval.d.ts
│   │   │       │   │   ├── timeInterval.d.ts.map
│   │   │       │   │   ├── timeout.d.ts
│   │   │       │   │   ├── timeout.d.ts.map
│   │   │       │   │   ├── timeoutWith.d.ts
│   │   │       │   │   ├── timeoutWith.d.ts.map
│   │   │       │   │   ├── timestamp.d.ts
│   │   │       │   │   ├── timestamp.d.ts.map
│   │   │       │   │   ├── toArray.d.ts
│   │   │       │   │   ├── toArray.d.ts.map
│   │   │       │   │   ├── windowCount.d.ts
│   │   │       │   │   ├── windowCount.d.ts.map
│   │   │       │   │   ├── window.d.ts
│   │   │       │   │   ├── window.d.ts.map
│   │   │       │   │   ├── windowTime.d.ts
│   │   │       │   │   ├── windowTime.d.ts.map
│   │   │       │   │   ├── windowToggle.d.ts
│   │   │       │   │   ├── windowToggle.d.ts.map
│   │   │       │   │   ├── windowWhen.d.ts
│   │   │       │   │   ├── windowWhen.d.ts.map
│   │   │       │   │   ├── withLatestFrom.d.ts
│   │   │       │   │   ├── withLatestFrom.d.ts.map
│   │   │       │   │   ├── zipAll.d.ts
│   │   │       │   │   ├── zipAll.d.ts.map
│   │   │       │   │   ├── zip.d.ts
│   │   │       │   │   ├── zip.d.ts.map
│   │   │       │   │   ├── zipWith.d.ts
│   │   │       │   │   └── zipWith.d.ts.map
│   │   │       │   ├── ReplaySubject.d.ts
│   │   │       │   ├── ReplaySubject.d.ts.map
│   │   │       │   ├── scheduled
│   │   │       │   │   ├── scheduleArray.d.ts
│   │   │       │   │   ├── scheduleArray.d.ts.map
│   │   │       │   │   ├── scheduleAsyncIterable.d.ts
│   │   │       │   │   ├── scheduleAsyncIterable.d.ts.map
│   │   │       │   │   ├── scheduled.d.ts
│   │   │       │   │   ├── scheduled.d.ts.map
│   │   │       │   │   ├── scheduleIterable.d.ts
│   │   │       │   │   ├── scheduleIterable.d.ts.map
│   │   │       │   │   ├── scheduleObservable.d.ts
│   │   │       │   │   ├── scheduleObservable.d.ts.map
│   │   │       │   │   ├── schedulePromise.d.ts
│   │   │       │   │   ├── schedulePromise.d.ts.map
│   │   │       │   │   ├── scheduleReadableStreamLike.d.ts
│   │   │       │   │   └── scheduleReadableStreamLike.d.ts.map
│   │   │       │   ├── scheduler
│   │   │       │   │   ├── Action.d.ts
│   │   │       │   │   ├── Action.d.ts.map
│   │   │       │   │   ├── AnimationFrameAction.d.ts
│   │   │       │   │   ├── AnimationFrameAction.d.ts.map
│   │   │       │   │   ├── animationFrame.d.ts
│   │   │       │   │   ├── animationFrame.d.ts.map
│   │   │       │   │   ├── animationFrameProvider.d.ts
│   │   │       │   │   ├── animationFrameProvider.d.ts.map
│   │   │       │   │   ├── AnimationFrameScheduler.d.ts
│   │   │       │   │   ├── AnimationFrameScheduler.d.ts.map
│   │   │       │   │   ├── AsapAction.d.ts
│   │   │       │   │   ├── AsapAction.d.ts.map
│   │   │       │   │   ├── asap.d.ts
│   │   │       │   │   ├── asap.d.ts.map
│   │   │       │   │   ├── AsapScheduler.d.ts
│   │   │       │   │   ├── AsapScheduler.d.ts.map
│   │   │       │   │   ├── AsyncAction.d.ts
│   │   │       │   │   ├── AsyncAction.d.ts.map
│   │   │       │   │   ├── async.d.ts
│   │   │       │   │   ├── async.d.ts.map
│   │   │       │   │   ├── AsyncScheduler.d.ts
│   │   │       │   │   ├── AsyncScheduler.d.ts.map
│   │   │       │   │   ├── dateTimestampProvider.d.ts
│   │   │       │   │   ├── dateTimestampProvider.d.ts.map
│   │   │       │   │   ├── immediateProvider.d.ts
│   │   │       │   │   ├── immediateProvider.d.ts.map
│   │   │       │   │   ├── intervalProvider.d.ts
│   │   │       │   │   ├── intervalProvider.d.ts.map
│   │   │       │   │   ├── performanceTimestampProvider.d.ts
│   │   │       │   │   ├── performanceTimestampProvider.d.ts.map
│   │   │       │   │   ├── QueueAction.d.ts
│   │   │       │   │   ├── QueueAction.d.ts.map
│   │   │       │   │   ├── queue.d.ts
│   │   │       │   │   ├── queue.d.ts.map
│   │   │       │   │   ├── QueueScheduler.d.ts
│   │   │       │   │   ├── QueueScheduler.d.ts.map
│   │   │       │   │   ├── timeoutProvider.d.ts
│   │   │       │   │   ├── timeoutProvider.d.ts.map
│   │   │       │   │   ├── timerHandle.d.ts
│   │   │       │   │   ├── timerHandle.d.ts.map
│   │   │       │   │   ├── VirtualTimeScheduler.d.ts
│   │   │       │   │   └── VirtualTimeScheduler.d.ts.map
│   │   │       │   ├── Scheduler.d.ts
│   │   │       │   ├── Scheduler.d.ts.map
│   │   │       │   ├── Subject.d.ts
│   │   │       │   ├── Subject.d.ts.map
│   │   │       │   ├── Subscriber.d.ts
│   │   │       │   ├── Subscriber.d.ts.map
│   │   │       │   ├── Subscription.d.ts
│   │   │       │   ├── Subscription.d.ts.map
│   │   │       │   ├── symbol
│   │   │       │   │   ├── iterator.d.ts
│   │   │       │   │   ├── iterator.d.ts.map
│   │   │       │   │   ├── observable.d.ts
│   │   │       │   │   └── observable.d.ts.map
│   │   │       │   ├── testing
│   │   │       │   │   ├── ColdObservable.d.ts
│   │   │       │   │   ├── ColdObservable.d.ts.map
│   │   │       │   │   ├── HotObservable.d.ts
│   │   │       │   │   ├── HotObservable.d.ts.map
│   │   │       │   │   ├── SubscriptionLog.d.ts
│   │   │       │   │   ├── SubscriptionLog.d.ts.map
│   │   │       │   │   ├── SubscriptionLoggable.d.ts
│   │   │       │   │   ├── SubscriptionLoggable.d.ts.map
│   │   │       │   │   ├── TestMessage.d.ts
│   │   │       │   │   ├── TestMessage.d.ts.map
│   │   │       │   │   ├── TestScheduler.d.ts
│   │   │       │   │   └── TestScheduler.d.ts.map
│   │   │       │   ├── types.d.ts
│   │   │       │   ├── types.d.ts.map
│   │   │       │   └── util
│   │   │       │       ├── applyMixins.d.ts
│   │   │       │       ├── applyMixins.d.ts.map
│   │   │       │       ├── argsArgArrayOrObject.d.ts
│   │   │       │       ├── argsArgArrayOrObject.d.ts.map
│   │   │       │       ├── args.d.ts
│   │   │       │       ├── args.d.ts.map
│   │   │       │       ├── argsOrArgArray.d.ts
│   │   │       │       ├── argsOrArgArray.d.ts.map
│   │   │       │       ├── ArgumentOutOfRangeError.d.ts
│   │   │       │       ├── ArgumentOutOfRangeError.d.ts.map
│   │   │       │       ├── arrRemove.d.ts
│   │   │       │       ├── arrRemove.d.ts.map
│   │   │       │       ├── createErrorClass.d.ts
│   │   │       │       ├── createErrorClass.d.ts.map
│   │   │       │       ├── createObject.d.ts
│   │   │       │       ├── createObject.d.ts.map
│   │   │       │       ├── EmptyError.d.ts
│   │   │       │       ├── EmptyError.d.ts.map
│   │   │       │       ├── errorContext.d.ts
│   │   │       │       ├── errorContext.d.ts.map
│   │   │       │       ├── executeSchedule.d.ts
│   │   │       │       ├── executeSchedule.d.ts.map
│   │   │       │       ├── identity.d.ts
│   │   │       │       ├── identity.d.ts.map
│   │   │       │       ├── Immediate.d.ts
│   │   │       │       ├── Immediate.d.ts.map
│   │   │       │       ├── isArrayLike.d.ts
│   │   │       │       ├── isArrayLike.d.ts.map
│   │   │       │       ├── isAsyncIterable.d.ts
│   │   │       │       ├── isAsyncIterable.d.ts.map
│   │   │       │       ├── isDate.d.ts
│   │   │       │       ├── isDate.d.ts.map
│   │   │       │       ├── isFunction.d.ts
│   │   │       │       ├── isFunction.d.ts.map
│   │   │       │       ├── isInteropObservable.d.ts
│   │   │       │       ├── isInteropObservable.d.ts.map
│   │   │       │       ├── isIterable.d.ts
│   │   │       │       ├── isIterable.d.ts.map
│   │   │       │       ├── isObservable.d.ts
│   │   │       │       ├── isObservable.d.ts.map
│   │   │       │       ├── isPromise.d.ts
│   │   │       │       ├── isPromise.d.ts.map
│   │   │       │       ├── isReadableStreamLike.d.ts
│   │   │       │       ├── isReadableStreamLike.d.ts.map
│   │   │       │       ├── isScheduler.d.ts
│   │   │       │       ├── isScheduler.d.ts.map
│   │   │       │       ├── lift.d.ts
│   │   │       │       ├── lift.d.ts.map
│   │   │       │       ├── mapOneOrManyArgs.d.ts
│   │   │       │       ├── mapOneOrManyArgs.d.ts.map
│   │   │       │       ├── noop.d.ts
│   │   │       │       ├── noop.d.ts.map
│   │   │       │       ├── not.d.ts
│   │   │       │       ├── not.d.ts.map
│   │   │       │       ├── NotFoundError.d.ts
│   │   │       │       ├── NotFoundError.d.ts.map
│   │   │       │       ├── ObjectUnsubscribedError.d.ts
│   │   │       │       ├── ObjectUnsubscribedError.d.ts.map
│   │   │       │       ├── pipe.d.ts
│   │   │       │       ├── pipe.d.ts.map
│   │   │       │       ├── reportUnhandledError.d.ts
│   │   │       │       ├── reportUnhandledError.d.ts.map
│   │   │       │       ├── SequenceError.d.ts
│   │   │       │       ├── SequenceError.d.ts.map
│   │   │       │       ├── subscribeToArray.d.ts
│   │   │       │       ├── subscribeToArray.d.ts.map
│   │   │       │       ├── throwUnobservableError.d.ts
│   │   │       │       ├── throwUnobservableError.d.ts.map
│   │   │       │       ├── UnsubscriptionError.d.ts
│   │   │       │       ├── UnsubscriptionError.d.ts.map
│   │   │       │       ├── workarounds.d.ts
│   │   │       │       └── workarounds.d.ts.map
│   │   │       ├── operators
│   │   │       │   ├── index.d.ts
│   │   │       │   └── index.d.ts.map
│   │   │       ├── testing
│   │   │       │   ├── index.d.ts
│   │   │       │   └── index.d.ts.map
│   │   │       └── webSocket
│   │   │           ├── index.d.ts
│   │   │           └── index.d.ts.map
│   │   ├── fetch
│   │   │   └── package.json
│   │   ├── LICENSE.txt
│   │   ├── operators
│   │   │   └── package.json
│   │   ├── package.json
│   │   ├── README.md
│   │   ├── src
│   │   │   ├── ajax
│   │   │   │   └── index.ts
│   │   │   ├── fetch
│   │   │   │   └── index.ts
│   │   │   ├── index.ts
│   │   │   ├── internal
│   │   │   │   ├── ajax
│   │   │   │   │   ├── AjaxResponse.ts
│   │   │   │   │   ├── ajax.ts
│   │   │   │   │   ├── errors.ts
│   │   │   │   │   ├── getXHRResponse.ts
│   │   │   │   │   └── types.ts
│   │   │   │   ├── AnyCatcher.ts
│   │   │   │   ├── AsyncSubject.ts
│   │   │   │   ├── BehaviorSubject.ts
│   │   │   │   ├── config.ts
│   │   │   │   ├── firstValueFrom.ts
│   │   │   │   ├── lastValueFrom.ts
│   │   │   │   ├── NotificationFactories.ts
│   │   │   │   ├── Notification.ts
│   │   │   │   ├── observable
│   │   │   │   │   ├── bindCallbackInternals.ts
│   │   │   │   │   ├── bindCallback.ts
│   │   │   │   │   ├── bindNodeCallback.ts
│   │   │   │   │   ├── combineLatest.ts
│   │   │   │   │   ├── concat.ts
│   │   │   │   │   ├── ConnectableObservable.ts
│   │   │   │   │   ├── connectable.ts
│   │   │   │   │   ├── defer.ts
│   │   │   │   │   ├── dom
│   │   │   │   │   │   ├── animationFrames.ts
│   │   │   │   │   │   ├── fetch.ts
│   │   │   │   │   │   ├── WebSocketSubject.ts
│   │   │   │   │   │   └── webSocket.ts
│   │   │   │   │   ├── empty.ts
│   │   │   │   │   ├── forkJoin.ts
│   │   │   │   │   ├── fromEventPattern.ts
│   │   │   │   │   ├── fromEvent.ts
│   │   │   │   │   ├── fromSubscribable.ts
│   │   │   │   │   ├── from.ts
│   │   │   │   │   ├── generate.ts
│   │   │   │   │   ├── iif.ts
│   │   │   │   │   ├── innerFrom.ts
│   │   │   │   │   ├── interval.ts
│   │   │   │   │   ├── merge.ts
│   │   │   │   │   ├── never.ts
│   │   │   │   │   ├── of.ts
│   │   │   │   │   ├── onErrorResumeNext.ts
│   │   │   │   │   ├── pairs.ts
│   │   │   │   │   ├── partition.ts
│   │   │   │   │   ├── race.ts
│   │   │   │   │   ├── range.ts
│   │   │   │   │   ├── throwError.ts
│   │   │   │   │   ├── timer.ts
│   │   │   │   │   ├── using.ts
│   │   │   │   │   └── zip.ts
│   │   │   │   ├── Observable.ts
│   │   │   │   ├── operators
│   │   │   │   │   ├── auditTime.ts
│   │   │   │   │   ├── audit.ts
│   │   │   │   │   ├── bufferCount.ts
│   │   │   │   │   ├── bufferTime.ts
│   │   │   │   │   ├── bufferToggle.ts
│   │   │   │   │   ├── buffer.ts
│   │   │   │   │   ├── bufferWhen.ts
│   │   │   │   │   ├── catchError.ts
│   │   │   │   │   ├── combineAll.ts
│   │   │   │   │   ├── combineLatestAll.ts
│   │   │   │   │   ├── combineLatest.ts
│   │   │   │   │   ├── combineLatestWith.ts
│   │   │   │   │   ├── concatAll.ts
│   │   │   │   │   ├── concatMapTo.ts
│   │   │   │   │   ├── concatMap.ts
│   │   │   │   │   ├── concat.ts
│   │   │   │   │   ├── concatWith.ts
│   │   │   │   │   ├── connect.ts
│   │   │   │   │   ├── count.ts
│   │   │   │   │   ├── debounceTime.ts
│   │   │   │   │   ├── debounce.ts
│   │   │   │   │   ├── defaultIfEmpty.ts
│   │   │   │   │   ├── delay.ts
│   │   │   │   │   ├── delayWhen.ts
│   │   │   │   │   ├── dematerialize.ts
│   │   │   │   │   ├── distinct.ts
│   │   │   │   │   ├── distinctUntilChanged.ts
│   │   │   │   │   ├── distinctUntilKeyChanged.ts
│   │   │   │   │   ├── elementAt.ts
│   │   │   │   │   ├── endWith.ts
│   │   │   │   │   ├── every.ts
│   │   │   │   │   ├── exhaustAll.ts
│   │   │   │   │   ├── exhaustMap.ts
│   │   │   │   │   ├── exhaust.ts
│   │   │   │   │   ├── expand.ts
│   │   │   │   │   ├── filter.ts
│   │   │   │   │   ├── finalize.ts
│   │   │   │   │   ├── findIndex.ts
│   │   │   │   │   ├── find.ts
│   │   │   │   │   ├── first.ts
│   │   │   │   │   ├── flatMap.ts
│   │   │   │   │   ├── groupBy.ts
│   │   │   │   │   ├── ignoreElements.ts
│   │   │   │   │   ├── isEmpty.ts
│   │   │   │   │   ├── joinAllInternals.ts
│   │   │   │   │   ├── last.ts
│   │   │   │   │   ├── mapTo.ts
│   │   │   │   │   ├── map.ts
│   │   │   │   │   ├── materialize.ts
│   │   │   │   │   ├── max.ts
│   │   │   │   │   ├── mergeAll.ts
│   │   │   │   │   ├── mergeInternals.ts
│   │   │   │   │   ├── mergeMapTo.ts
│   │   │   │   │   ├── mergeMap.ts
│   │   │   │   │   ├── mergeScan.ts
│   │   │   │   │   ├── merge.ts
│   │   │   │   │   ├── mergeWith.ts
│   │   │   │   │   ├── min.ts
│   │   │   │   │   ├── multicast.ts
│   │   │   │   │   ├── observeOn.ts
│   │   │   │   │   ├── onErrorResumeNextWith.ts
│   │   │   │   │   ├── OperatorSubscriber.ts
│   │   │   │   │   ├── pairwise.ts
│   │   │   │   │   ├── partition.ts
│   │   │   │   │   ├── pluck.ts
│   │   │   │   │   ├── publishBehavior.ts
│   │   │   │   │   ├── publishLast.ts
│   │   │   │   │   ├── publishReplay.ts
│   │   │   │   │   ├── publish.ts
│   │   │   │   │   ├── race.ts
│   │   │   │   │   ├── raceWith.ts
│   │   │   │   │   ├── reduce.ts
│   │   │   │   │   ├── refCount.ts
│   │   │   │   │   ├── repeat.ts
│   │   │   │   │   ├── repeatWhen.ts
│   │   │   │   │   ├── retry.ts
│   │   │   │   │   ├── retryWhen.ts
│   │   │   │   │   ├── sampleTime.ts
│   │   │   │   │   ├── sample.ts
│   │   │   │   │   ├── scanInternals.ts
│   │   │   │   │   ├── scan.ts
│   │   │   │   │   ├── sequenceEqual.ts
│   │   │   │   │   ├── shareReplay.ts
│   │   │   │   │   ├── share.ts
│   │   │   │   │   ├── single.ts
│   │   │   │   │   ├── skipLast.ts
│   │   │   │   │   ├── skip.ts
│   │   │   │   │   ├── skipUntil.ts
│   │   │   │   │   ├── skipWhile.ts
│   │   │   │   │   ├── startWith.ts
│   │   │   │   │   ├── subscribeOn.ts
│   │   │   │   │   ├── switchAll.ts
│   │   │   │   │   ├── switchMapTo.ts
│   │   │   │   │   ├── switchMap.ts
│   │   │   │   │   ├── switchScan.ts
│   │   │   │   │   ├── takeLast.ts
│   │   │   │   │   ├── take.ts
│   │   │   │   │   ├── takeUntil.ts
│   │   │   │   │   ├── takeWhile.ts
│   │   │   │   │   ├── tap.ts
│   │   │   │   │   ├── throttleTime.ts
│   │   │   │   │   ├── throttle.ts
│   │   │   │   │   ├── throwIfEmpty.ts
│   │   │   │   │   ├── timeInterval.ts
│   │   │   │   │   ├── timeout.ts
│   │   │   │   │   ├── timeoutWith.ts
│   │   │   │   │   ├── timestamp.ts
│   │   │   │   │   ├── toArray.ts
│   │   │   │   │   ├── windowCount.ts
│   │   │   │   │   ├── windowTime.ts
│   │   │   │   │   ├── windowToggle.ts
│   │   │   │   │   ├── window.ts
│   │   │   │   │   ├── windowWhen.ts
│   │   │   │   │   ├── withLatestFrom.ts
│   │   │   │   │   ├── zipAll.ts
│   │   │   │   │   ├── zip.ts
│   │   │   │   │   └── zipWith.ts
│   │   │   │   ├── Operator.ts
│   │   │   │   ├── ReplaySubject.ts
│   │   │   │   ├── scheduled
│   │   │   │   │   ├── scheduleArray.ts
│   │   │   │   │   ├── scheduleAsyncIterable.ts
│   │   │   │   │   ├── scheduled.ts
│   │   │   │   │   ├── scheduleIterable.ts
│   │   │   │   │   ├── scheduleObservable.ts
│   │   │   │   │   ├── schedulePromise.ts
│   │   │   │   │   └── scheduleReadableStreamLike.ts
│   │   │   │   ├── scheduler
│   │   │   │   │   ├── Action.ts
│   │   │   │   │   ├── AnimationFrameAction.ts
│   │   │   │   │   ├── animationFrameProvider.ts
│   │   │   │   │   ├── AnimationFrameScheduler.ts
│   │   │   │   │   ├── animationFrame.ts
│   │   │   │   │   ├── AsapAction.ts
│   │   │   │   │   ├── AsapScheduler.ts
│   │   │   │   │   ├── asap.ts
│   │   │   │   │   ├── AsyncAction.ts
│   │   │   │   │   ├── AsyncScheduler.ts
│   │   │   │   │   ├── async.ts
│   │   │   │   │   ├── dateTimestampProvider.ts
│   │   │   │   │   ├── immediateProvider.ts
│   │   │   │   │   ├── intervalProvider.ts
│   │   │   │   │   ├── performanceTimestampProvider.ts
│   │   │   │   │   ├── QueueAction.ts
│   │   │   │   │   ├── QueueScheduler.ts
│   │   │   │   │   ├── queue.ts
│   │   │   │   │   ├── timeoutProvider.ts
│   │   │   │   │   ├── timerHandle.ts
│   │   │   │   │   └── VirtualTimeScheduler.ts
│   │   │   │   ├── Scheduler.ts
│   │   │   │   ├── Subject.ts
│   │   │   │   ├── Subscriber.ts
│   │   │   │   ├── Subscription.ts
│   │   │   │   ├── symbol
│   │   │   │   │   ├── iterator.ts
│   │   │   │   │   └── observable.ts
│   │   │   │   ├── testing
│   │   │   │   │   ├── ColdObservable.ts
│   │   │   │   │   ├── HotObservable.ts
│   │   │   │   │   ├── SubscriptionLoggable.ts
│   │   │   │   │   ├── SubscriptionLog.ts
│   │   │   │   │   ├── TestMessage.ts
│   │   │   │   │   └── TestScheduler.ts
│   │   │   │   ├── types.ts
│   │   │   │   ├── umd.ts
│   │   │   │   └── util
│   │   │   │       ├── applyMixins.ts
│   │   │   │       ├── argsArgArrayOrObject.ts
│   │   │   │       ├── argsOrArgArray.ts
│   │   │   │       ├── args.ts
│   │   │   │       ├── ArgumentOutOfRangeError.ts
│   │   │   │       ├── arrRemove.ts
│   │   │   │       ├── createErrorClass.ts
│   │   │   │       ├── createObject.ts
│   │   │   │       ├── EmptyError.ts
│   │   │   │       ├── errorContext.ts
│   │   │   │       ├── executeSchedule.ts
│   │   │   │       ├── identity.ts
│   │   │   │       ├── Immediate.ts
│   │   │   │       ├── isArrayLike.ts
│   │   │   │       ├── isAsyncIterable.ts
│   │   │   │       ├── isDate.ts
│   │   │   │       ├── isFunction.ts
│   │   │   │       ├── isInteropObservable.ts
│   │   │   │       ├── isIterable.ts
│   │   │   │       ├── isObservable.ts
│   │   │   │       ├── isPromise.ts
│   │   │   │       ├── isReadableStreamLike.ts
│   │   │   │       ├── isScheduler.ts
│   │   │   │       ├── lift.ts
│   │   │   │       ├── mapOneOrManyArgs.ts
│   │   │   │       ├── noop.ts
│   │   │   │       ├── NotFoundError.ts
│   │   │   │       ├── not.ts
│   │   │   │       ├── ObjectUnsubscribedError.ts
│   │   │   │       ├── pipe.ts
│   │   │   │       ├── reportUnhandledError.ts
│   │   │   │       ├── SequenceError.ts
│   │   │   │       ├── subscribeToArray.ts
│   │   │   │       ├── throwUnobservableError.ts
│   │   │   │       ├── UnsubscriptionError.ts
│   │   │   │       └── workarounds.ts
│   │   │   ├── operators
│   │   │   │   └── index.ts
│   │   │   ├── Rx.global.js
│   │   │   ├── testing
│   │   │   │   └── index.ts
│   │   │   ├── tsconfig.base.json
│   │   │   ├── tsconfig.cjs.json
│   │   │   ├── tsconfig.cjs.spec.json
│   │   │   ├── tsconfig.esm5.json
│   │   │   ├── tsconfig.esm5.rollup.json
│   │   │   ├── tsconfig.esm.json
│   │   │   ├── tsconfig.types.json
│   │   │   ├── tsconfig.types.spec.json
│   │   │   └── webSocket
│   │   │       └── index.ts
│   │   ├── testing
│   │   │   └── package.json
│   │   ├── tsconfig.json
│   │   └── webSocket
│   │       └── package.json
│   ├── sass-embedded
│   │   ├── dist
│   │   │   ├── bin
│   │   │   │   ├── sass.js
│   │   │   │   └── sass.js.map
│   │   │   ├── jest.config.js
│   │   │   ├── jest.config.js.map
│   │   │   ├── lib
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── index.mjs
│   │   │   │   └── src
│   │   │   │       ├── canonicalize-context.js
│   │   │   │       ├── canonicalize-context.js.map
│   │   │   │       ├── compile.js
│   │   │   │       ├── compile.js.map
│   │   │   │       ├── compiler
│   │   │   │       │   ├── async.js
│   │   │   │       │   ├── async.js.map
│   │   │   │       │   ├── sync.js
│   │   │   │       │   ├── sync.js.map
│   │   │   │       │   ├── utils.js
│   │   │   │       │   └── utils.js.map
│   │   │   │       ├── compiler-path.js
│   │   │   │       ├── compiler-path.js.map
│   │   │   │       ├── deprecations.js
│   │   │   │       ├── deprecations.js.map
│   │   │   │       ├── deprotofy-span.js
│   │   │   │       ├── deprotofy-span.js.map
│   │   │   │       ├── dispatcher.js
│   │   │   │       ├── dispatcher.js.map
│   │   │   │       ├── elf.js
│   │   │   │       ├── elf.js.map
│   │   │   │       ├── exception.js
│   │   │   │       ├── exception.js.map
│   │   │   │       ├── function-registry.js
│   │   │   │       ├── function-registry.js.map
│   │   │   │       ├── importer-registry.js
│   │   │   │       ├── importer-registry.js.map
│   │   │   │       ├── legacy
│   │   │   │       │   ├── importer.js
│   │   │   │       │   ├── importer.js.map
│   │   │   │       │   ├── index.js
│   │   │   │       │   ├── index.js.map
│   │   │   │       │   ├── resolve-path.js
│   │   │   │       │   ├── resolve-path.js.map
│   │   │   │       │   ├── utils.js
│   │   │   │       │   ├── utils.js.map
│   │   │   │       │   └── value
│   │   │   │       │       ├── base.js
│   │   │   │       │       ├── base.js.map
│   │   │   │       │       ├── color.js
│   │   │   │       │       ├── color.js.map
│   │   │   │       │       ├── index.js
│   │   │   │       │       ├── index.js.map
│   │   │   │       │       ├── list.js
│   │   │   │       │       ├── list.js.map
│   │   │   │       │       ├── map.js
│   │   │   │       │       ├── map.js.map
│   │   │   │       │       ├── number.js
│   │   │   │       │       ├── number.js.map
│   │   │   │       │       ├── string.js
│   │   │   │       │       ├── string.js.map
│   │   │   │       │       ├── wrap.js
│   │   │   │       │       └── wrap.js.map
│   │   │   │       ├── logger.js
│   │   │   │       ├── logger.js.map
│   │   │   │       ├── messages.js
│   │   │   │       ├── messages.js.map
│   │   │   │       ├── message-transformer.js
│   │   │   │       ├── message-transformer.js.map
│   │   │   │       ├── packet-transformer.js
│   │   │   │       ├── packet-transformer.js.map
│   │   │   │       ├── protofier.js
│   │   │   │       ├── protofier.js.map
│   │   │   │       ├── request-tracker.js
│   │   │   │       ├── request-tracker.js.map
│   │   │   │       ├── utils.js
│   │   │   │       ├── utils.js.map
│   │   │   │       ├── value
│   │   │   │       │   ├── argument-list.js
│   │   │   │       │   ├── argument-list.js.map
│   │   │   │       │   ├── boolean.js
│   │   │   │       │   ├── boolean.js.map
│   │   │   │       │   ├── calculations.js
│   │   │   │       │   ├── calculations.js.map
│   │   │   │       │   ├── color.js
│   │   │   │       │   ├── color.js.map
│   │   │   │       │   ├── function.js
│   │   │   │       │   ├── function.js.map
│   │   │   │       │   ├── index.js
│   │   │   │       │   ├── index.js.map
│   │   │   │       │   ├── list.js
│   │   │   │       │   ├── list.js.map
│   │   │   │       │   ├── map.js
│   │   │   │       │   ├── map.js.map
│   │   │   │       │   ├── mixin.js
│   │   │   │       │   ├── mixin.js.map
│   │   │   │       │   ├── null.js
│   │   │   │       │   ├── null.js.map
│   │   │   │       │   ├── number.js
│   │   │   │       │   ├── number.js.map
│   │   │   │       │   ├── string.js
│   │   │   │       │   ├── string.js.map
│   │   │   │       │   ├── utils.js
│   │   │   │       │   └── utils.js.map
│   │   │   │       ├── vendor
│   │   │   │       │   ├── deprecations.js
│   │   │   │       │   ├── deprecations.js.map
│   │   │   │       │   ├── embedded_sass_pb.js
│   │   │   │       │   └── embedded_sass_pb.js.map
│   │   │   │       ├── version.js
│   │   │   │       └── version.js.map
│   │   │   ├── package.json
│   │   │   ├── test
│   │   │   │   ├── sandbox.js
│   │   │   │   ├── sandbox.js.map
│   │   │   │   ├── utils.js
│   │   │   │   └── utils.js.map
│   │   │   ├── tool
│   │   │   │   ├── get-deprecations.js
│   │   │   │   ├── get-deprecations.js.map
│   │   │   │   ├── get-embedded-compiler.js
│   │   │   │   ├── get-embedded-compiler.js.map
│   │   │   │   ├── get-language-repo.js
│   │   │   │   ├── get-language-repo.js.map
│   │   │   │   ├── init.js
│   │   │   │   ├── init.js.map
│   │   │   │   ├── prepare-optional-release.js
│   │   │   │   ├── prepare-optional-release.js.map
│   │   │   │   ├── prepare-release.js
│   │   │   │   ├── prepare-release.js.map
│   │   │   │   ├── utils.js
│   │   │   │   └── utils.js.map
│   │   │   ├── tsconfig.build.tsbuildinfo
│   │   │   └── types
│   │   │       ├── compile.d.ts
│   │   │       ├── deprecations.d.ts
│   │   │       ├── exception.d.ts
│   │   │       ├── importer.d.ts
│   │   │       ├── index.d.ts
│   │   │       ├── index.m.d.ts
│   │   │       ├── legacy
│   │   │       │   ├── exception.d.ts
│   │   │       │   ├── function.d.ts
│   │   │       │   ├── importer.d.ts
│   │   │       │   ├── options.d.ts
│   │   │       │   ├── plugin_this.d.ts
│   │   │       │   └── render.d.ts
│   │   │       ├── logger
│   │   │       │   ├── index.d.ts
│   │   │       │   ├── source_location.d.ts
│   │   │       │   └── source_span.d.ts
│   │   │       ├── options.d.ts
│   │   │       ├── util
│   │   │       │   └── promise_or.d.ts
│   │   │       └── value
│   │   │           ├── argument_list.d.ts
│   │   │           ├── boolean.d.ts
│   │   │           ├── calculation.d.ts
│   │   │           ├── color.d.ts
│   │   │           ├── function.d.ts
│   │   │           ├── index.d.ts
│   │   │           ├── list.d.ts
│   │   │           ├── map.d.ts
│   │   │           ├── mixin.d.ts
│   │   │           ├── number.d.ts
│   │   │           └── string.d.ts
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── sass-embedded-linux-musl-x64
│   │   ├── dart-sass
│   │   │   ├── sass
│   │   │   └── src
│   │   │       ├── dart
│   │   │       ├── LICENSE
│   │   │       └── sass.snapshot
│   │   ├── package.json
│   │   └── README.md
│   ├── sass-embedded-linux-x64
│   │   ├── dart-sass
│   │   │   ├── sass
│   │   │   └── src
│   │   │       ├── dart
│   │   │       ├── LICENSE
│   │   │       └── sass.snapshot
│   │   ├── package.json
│   │   └── README.md
│   ├── source-map-js
│   │   ├── lib
│   │   │   ├── array-set.js
│   │   │   ├── base64.js
│   │   │   ├── base64-vlq.js
│   │   │   ├── binary-search.js
│   │   │   ├── mapping-list.js
│   │   │   ├── quick-sort.js
│   │   │   ├── source-map-consumer.d.ts
│   │   │   ├── source-map-consumer.js
│   │   │   ├── source-map-generator.d.ts
│   │   │   ├── source-map-generator.js
│   │   │   ├── source-node.d.ts
│   │   │   ├── source-node.js
│   │   │   └── util.js
│   │   ├── LICENSE
│   │   ├── package.json
│   │   ├── README.md
│   │   ├── source-map.d.ts
│   │   └── source-map.js
│   ├── supports-color
│   │   ├── browser.js
│   │   ├── index.js
│   │   ├── license
│   │   ├── package.json
│   │   └── readme.md
│   ├── sync-child-process
│   │   ├── dist
│   │   │   ├── lib
│   │   │   │   ├── event.d.ts
│   │   │   │   ├── event.js
│   │   │   │   ├── event.js.map
│   │   │   │   ├── index.d.ts
│   │   │   │   ├── index.js
│   │   │   │   ├── index.js.map
│   │   │   │   ├── worker.d.ts
│   │   │   │   ├── worker.js
│   │   │   │   └── worker.js.map
│   │   │   └── tsconfig.build.tsbuildinfo
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── sync-message-port
│   │   ├── dist
│   │   │   ├── lib
│   │   │   │   ├── index.d.ts
│   │   │   │   ├── index.js
│   │   │   │   └── index.js.map
│   │   │   └── tsconfig.build.tsbuildinfo
│   │   ├── LICENSE
│   │   ├── package.json
│   │   └── README.md
│   ├── tslib
│   │   ├── CopyrightNotice.txt
│   │   ├── LICENSE.txt
│   │   ├── modules
│   │   │   ├── index.d.ts
│   │   │   ├── index.js
│   │   │   └── package.json
│   │   ├── package.json
│   │   ├── README.md
│   │   ├── SECURITY.md
│   │   ├── tslib.d.ts
│   │   ├── tslib.es6.html
│   │   ├── tslib.es6.js
│   │   ├── tslib.es6.mjs
│   │   ├── tslib.html
│   │   └── tslib.js
│   ├── @types
│   │   └── estree
│   │       ├── flow.d.ts
│   │       ├── index.d.ts
│   │       ├── LICENSE
│   │       ├── package.json
│   │       └── README.md
│   ├── varint
│   │   ├── bench.js
│   │   ├── decode.js
│   │   ├── encode.js
│   │   ├── index.js
│   │   ├── length.js
│   │   ├── package.json
│   │   ├── README.md
│   │   └── test.js
│   ├── vite
│   │   ├── bin
│   │   │   ├── openChrome.applescript
│   │   │   └── vite.js
│   │   ├── client.d.ts
│   │   ├── dist
│   │   │   ├── client
│   │   │   │   ├── client.mjs
│   │   │   │   └── env.mjs
│   │   │   ├── node
│   │   │   │   ├── chunks
│   │   │   │   │   ├── dep-Ba1kN6Mp.js
│   │   │   │   │   ├── dep-C6EFp3uH.js
│   │   │   │   │   ├── dep-CB_7IfJ-.js
│   │   │   │   │   ├── dep-D-7KCb9p.js
│   │   │   │   │   └── dep-IQS-Za7F.js
│   │   │   │   ├── cli.js
│   │   │   │   ├── constants.js
│   │   │   │   ├── index.d.ts
│   │   │   │   ├── index.js
│   │   │   │   ├── runtime.d.ts
│   │   │   │   ├── runtime.js
│   │   │   │   └── types.d-aGj9QkWt.d.ts
│   │   │   └── node-cjs
│   │   │       └── publicUtils.cjs
│   │   ├── index.cjs
│   │   ├── index.d.cts
│   │   ├── LICENSE.md
│   │   ├── package.json
│   │   ├── README.md
│   │   └── types
│   │       ├── customEvent.d.ts
│   │       ├── hmrPayload.d.ts
│   │       ├── hot.d.ts
│   │       ├── importGlob.d.ts
│   │       ├── import-meta.d.ts
│   │       ├── importMeta.d.ts
│   │       ├── metadata.d.ts
│   │       └── package.json
│   └── vite-plugin-full-reload
│       ├── dist
│       │   ├── index.cjs
│       │   ├── index.d.cts
│       │   ├── index.d.ts
│       │   └── index.js
│       ├── LICENSE.txt
│       ├── package.json
│       └── README.md
├── package.json
├── package-lock.json
├── phpunit.xml
├── public
│   ├── assets
│   │   ├── admin.css
│   │   ├── login.css
│   │   ├── register.css
│   │   └── user.css
│   ├── favicon.ico
│   ├── hot
│   ├── index.php
│   ├── robots.txt
│   └── storage -> /home/emerson/Documents/Universidad/Semestre_5/Proyecto_integrador/GesPro/storage/app/public
├── README.md
├── README.txt
├── resources
│   ├── css
│   │   ├── app.css
│   │   └── fullcalendar.css
│   ├── js
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── fullcalendar.js
│   ├── sass
│   │   ├── app.scss
│   │   ├── user.scss
│   │   └── _variables.scss
│   └── views
│       ├── admin
│       │   └── index.blade.php
│       ├── auth
│       │   ├── login.blade.php
│       │   ├── passwords
│       │   │   ├── confirm.blade.php
│       │   │   ├── email.blade.php
│       │   │   └── reset.blade.php
│       │   ├── register.blade.php
│       │   └── verify.blade.php
│       ├── crud_user
│       │   ├── create.blade.php
│       │   ├── edit.blade.php
│       │   └── index.blade.php
│       ├── documents
│       │   ├── create.blade.php
│       │   └── index.blade.php
│       ├── home.blade.php
│       ├── layouts
│       │   ├── app.blade.php
│       │   ├── auth_layout.blade.php
│       │   └── user.blade.php
│       ├── livewire
│       │   ├── documentos-component.blade.php
│       │   ├── integrantes-proyecto-modal.blade.php
│       │   ├── proyecto-documentos-component.blade.php
│       │   ├── proyecto-notas-component.blade.php
│       │   ├── proyecto-presupuestos2-component.blade.php
│       │   ├── proyecto-riesgos-component.blade.php
│       │   ├── proyecto-tareas-component.blade.php
│       │   ├── sub-component-documentos.blade.php
│       │   ├── sub-component-informacion.blade.php
│       │   ├── sub-component-tareas.blade.php
│       │   └── tareas-proyecto-modal.blade.php
│       ├── proyectos
│       │   ├── create.blade.php
│       │   ├── documentos.blade.php
│       │   ├── edit.blade.php
│       │   ├── index.blade.php
│       │   ├── notas.blade.php
│       │   ├── presupuestos2.blade.php
│       │   ├── riesgos.blade.php
│       │   ├── show.blade.php
│       │   └── tareas.blade.php
│       ├── user
│       │   ├── calendario.blade.php
│       │   ├── home.blade.php
│       │   └── miembros.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── rutas.md
├── storage
│   ├── app
│   │   ├── documents
│   │   │   ├── 7OAhnKxr5KYX0NcxOawf3dXqPAZbCnmcLEveougg.docx
│   │   │   ├── 9KCFQrjMA282mqbtugaMldLIpqEXENFabvH3PFFw.pdf
│   │   │   ├── EJ9mDBZ9EC1QJPPjOGfKZqc5YodbWyXBGgkODv4J.pdf
│   │   │   ├── frvdhMSrykDrAUVjmYA3TtPzLZk2fObiI4eQiwTu.pdf
│   │   │   ├── hUO7WhTBz9CLhWQafl4GqIPYgLHATbhtvf2Y339h.pdf
│   │   │   ├── IdZxtt35KF7inYRgmzx5mbwkpY1svX2BneRktYWl.txt
│   │   │   ├── X8gWfjw5OWvskHe6Y5NiwH4lmabNx3AHErSkAhwO.pdf
│   │   │   ├── xAwWjlxFLsCfAZeG9O6ZnvvQDl1e4NajL5fA7v1x.pdf
│   │   │   └── ZWl4C4ixvtG21hwPBRcHNGvCOP3iODeELeXbsKpP.txt
│   │   ├── livewire-tmp
│   │   │   ├── 1gPFFgLMxk1Iy2zAzoD7thkgNQlh8v-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── 51sElsG8yvpqubHsAxDyh1tr50tSbs-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── 6ui5QtZ4e7ugjGO2R3yRnwpGqWhnG9-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── AV2gnGE07j2dISFgjE2ibpmJfkmBxp-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── C3tLQTdML2eHz176ofuLnqe0l7js2U-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── Da2ZIrluv5FV3Q5PvP0R9k7o8bvOVe-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── h2nvvDiA7CrHC0cK6GFqg5SelWx00X-metacG9saUNvc1hvMC5wbmc=-.png
│   │   │   ├── I2DQIPNzSEeND4PSltsXG6X278cO9G-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── kBnzLd8RMHGt4kmMrFfnYiKrtTNIgt-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── KRbkUAQerfvmkB2OVIgHj2QAuEqEZO-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── kwEzJPqTEMhgjgo0yJDF2WQpgHa8oO-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── LHCRcqk0iPt4vRiXgkRGzDnDAa8AqN-metacG9saUNvc1hvMC5wbmc=-.png
│   │   │   ├── NyZxFQ6JoAepYdJBKczqtutPnf5Cqh-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── pO5aL09NMVNrkZPX2DaZ1HZEScJ3wc-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── qmh7ug9gYThMwc1saZDoWf8cRU58O2-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── T2KMuWTBLfEhkTqYSGwtZNso3P8VHR-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── V1wYBW3L6TNBcCHendkor3WwrwaiL8-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── VHohAGU12yuprJHmlKOD43w7PFlrBB-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   ├── WClV7fxI9bPF92Ozn094gaSuyNFijy-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   │   ├── xcxv5xBM7GDZ36vapeG9ZiTx0gM1OG-metaQXByb3hQb2xUYXlsZXJfY29zLnBkZg==-.pdf
│   │   │   └── YGSEwxi6lM6wLOhR0mgiENvy2WIfiN-metaRXhwYW5zaW9uU2VyaWVUYXlsb3IucGRm-.pdf
│   │   └── public
│   │       ├── documentos
│   │       │   └── IXk5XfUl3V92AlnmtILty5imasUxAoHJjgYjVnJ8.pdf
│   │       └── documents
│   │           ├── 9rUrSNRIufphL2gu6eMCDEmtAHUjHh99IRDfzMZ2.pdf
│   │           ├── ed2zQMxGRrPh8ehdu6PNUj6ZPAAQdxLGM65XDKxG.pdf
│   │           ├── il0mlUcGuaJvrVAP3O0hIi5w7duz9wBnRNctnfc6.pdf
│   │           ├── iOsDqLjEc76vkQFQyQh3m2t1umwB50ADoGRW2AQJ.pdf
│   │           ├── soMKyyEiEBe1juL9qUJiBa7lmkQ4fM9NN1KrBVmQ.pdf
│   │           ├── v4uTclveAqOaMiksLffTNJHZCyiNCEqVGTBZLJAd.pdf
│   │           └── zcHHMJRfzv35WDYlzD32bv8V28I3r0Jb5A88ZnYo.pdf
│   ├── framework
│   │   ├── cache
│   │   │   ├── data
│   │   │   │   ├── 08
│   │   │   │   │   └── 74
│   │   │   │   │       └── 08743582456b52abe1182f5a5a3e12b457ba28b8
│   │   │   │   ├── 30
│   │   │   │   │   └── 95
│   │   │   │   ├── 53
│   │   │   │   │   └── c9
│   │   │   │   │       └── 53c9aae19ee1f0e0dcfa738e8868c6cb1d775cac
│   │   │   │   ├── 63
│   │   │   │   │   └── 23
│   │   │   │   ├── 76
│   │   │   │   │   └── e7
│   │   │   │   │       └── 76e7c0fdd0cc0d46502f9d381b947cdf6aa69891
│   │   │   │   ├── 9c
│   │   │   │   │   └── 1c
│   │   │   │   │       └── 9c1c01dc3ac1445a500251fc34a15d3e75a849df
│   │   │   │   ├── a3
│   │   │   │   │   └── b1
│   │   │   │   ├── b8
│   │   │   │   │   └── 55
│   │   │   │   │       └── b85503ed5c2bc216ecbc86c82005e92d6a01c97f
│   │   │   │   ├── eb
│   │   │   │   │   └── 85
│   │   │   │   └── f4
│   │   │   │       └── f5
│   │   │   │           └── f4f59e822581d785ba910fbf3f268eca79db8204
│   │   │   └── facade-1e06026dbe325cba543b2306bd7e55d66d31e4c1.php
│   │   ├── sessions
│   │   │   └── vUaVhmkbwO8W8kg1kIwcOIB45r2zw7TThExiwJPw
│   │   ├── testing
│   │   └── views
│   │       ├── 02247a4e113212451f66d033218eb9c3.php
│   │       ├── 056a2e21455b76a153a7c1b2534455b9.php
│   │       ├── 06bf1fe8ba696acc8700f14d181e5252.php
│   │       ├── 092d5925f1981b91433c74b9fe8f81c1.php
│   │       ├── 0cf58b46de9397242824b99913fae511.php
│   │       ├── 1022a4119b53ffa97d73bc10742bb0f0.php
│   │       ├── 14f598e6a456522b62bfc8e53f645db4.php
│   │       ├── 195cd00bf90cb40351480138318ecb3d.php
│   │       ├── 1c2e9bd3a041693d48ea57878a6f9688.php
│   │       ├── 1db0f2b6b82c91f6c997d36f5384e8a5.php
│   │       ├── 1e651e22352371d802ebc73495bd9f82.php
│   │       ├── 245ae2bd97410f327697bb9cf7b27940.php
│   │       ├── 3308ffd5bd70cd1bb02c978bc02757b9.php
│   │       ├── 33f03ff88fa0e3447fa1b5c24934ea6a.php
│   │       ├── 3a61784d19625fe6b517255773f645ab.php
│   │       ├── 3f1eb037f2e897479bb96b48583498cc.php
│   │       ├── 497c4bffb59b0c8c9fdc383acc4b8cf0.php
│   │       ├── 4baed52791a83666daa18fde6d664883.php
│   │       ├── 4e4ba258e43d622081ad02db273c6923.php
│   │       ├── 5e3b31fb23c4e03b4258be6d83095ab4.php
│   │       ├── 5ee78b28841dab9b4be52d902f90ddbb.php
│   │       ├── 6232cd4eee3501940f69660255795235.php
│   │       ├── 65f7de7dfd77302b1e2f231b13e4b1b6.php
│   │       ├── 685fe5f7542fcb6e0134a16cba1bd7e6.php
│   │       ├── 6e4c7a11070d6204efdccc6a12bb865c.php
│   │       ├── 7bd257c8a905d15f91777dc6a69362cf.php
│   │       ├── 7cdf9addf8b2122c018c3cff1789e86b.php
│   │       ├── 7e1bb1cd857c73b7fbbb5f158d114ccc.php
│   │       ├── 7e7be198812544ee759fce17c0c11909.php
│   │       ├── 800ba717486d9f02c32dbe38afe65fe4.php
│   │       ├── 81b7542d9f2d3a8fbd23ace6216fc7a4.php
│   │       ├── 836631e418b7bab40417cbb1357955c7.php
│   │       ├── 8505cf89068fcaabffd443f99bb205ce.php
│   │       ├── 8b24ecb248b773af7038654e05c68977.php
│   │       ├── 8c6cfafa9cd8cedc0e07c41dc95ad831.php
│   │       ├── 90c66121b16019ecba65874f5d74a13a.php
│   │       ├── 91009cca844c7b3c4e571f224aa9a57d.php
│   │       ├── 98cb980c3ff709a5b5d3c68d2d8dd29d.php
│   │       ├── 9f5f00bfcbf6856a9df63bea2df089b8.php
│   │       ├── a00ee9bf1471b125610e808c21652302.php
│   │       ├── aae4f1953dcb17aff42aebb3f84b6114.php
│   │       ├── ac1b51ef3c83366e66f1073a4cb4a4df.php
│   │       ├── af3f242fee672b9d6b8528a8ec650b07.php
│   │       ├── b3b0796aca3ca69ca439a16bbd9c95aa.php
│   │       ├── b484ef5f6ac5352d75a3e1510571b4af.php
│   │       ├── bb5b22a64fc1156836ef21965d3c4d78.php
│   │       ├── c59fcc7e07ad4b45a6b03d1320537210.php
│   │       ├── c8dd1bc888e6a457a6ce961bddae392f.php
│   │       ├── caf117c1f10070b123dc47c59078d453.php
│   │       ├── cbfa82628aec098dde6c463b1732e1b6.php
│   │       ├── d17ac6d39e254d4f01564a2f32d78b79.php
│   │       ├── d2722c5e371353d1a2090fba86ac9111.php
│   │       ├── d763bf9a947efe414367ee2db20cc3a6.php
│   │       ├── e07ed50366bba8325c9f2cdc294797b3.php
│   │       ├── e57541e884131219cf4e4eb258773f3e.php
│   │       ├── e69ccc8e8bc0e6e41d195d8fab3fa6b6.php
│   │       ├── e92c578c3206f4466587349b5dfe6a1e.php
│   │       ├── ee08d8a3ec6491bc362cbc5a6aa667c6.php
│   │       ├── efc05215d11f75c78a92ca2d2fb9d44e.php
│   │       ├── f4b7b632ca16c7b7f46de44363883cb7.php
│   │       ├── f507829acc48bfcef95c737d2ef0de9e.php
│   │       ├── f5820349fb7354820244985e52d38a3b.php
│   │       ├── f97619dad9539411dca1293d7948160b.php
│   │       ├── fa21750de5df7ee7e5a56d3f9fe94931.php
│   │       └── fd341afffc152df5f3689197308e8799.php
│   └── logs
│       └── laravel.log
├── tests
│   ├── CreatesApplication.php
│   ├── Feature
│   │   └── ExampleTest.php
│   ├── TestCase.php
│   └── Unit
│       └── ExampleTest.php
├── vendor
│   ├── autoload.php
│   ├── bin
│   │   ├── carbon
│   │   ├── patch-type-declarations
│   │   ├── php-parse
│   │   ├── phpunit
│   │   ├── pint
│   │   ├── psysh
│   │   ├── sail
│   │   ├── var-dump-server
│   │   └── yaml-lint
│   ├── brick
│   │   └── math
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── src
│   │           ├── BigDecimal.php
│   │           ├── BigInteger.php
│   │           ├── BigNumber.php
│   │           ├── BigRational.php
│   │           ├── Exception
│   │           │   ├── DivisionByZeroException.php
│   │           │   ├── IntegerOverflowException.php
│   │           │   ├── MathException.php
│   │           │   ├── NegativeNumberException.php
│   │           │   ├── NumberFormatException.php
│   │           │   └── RoundingNecessaryException.php
│   │           ├── Internal
│   │           │   ├── Calculator
│   │           │   │   ├── BcMathCalculator.php
│   │           │   │   ├── GmpCalculator.php
│   │           │   │   └── NativeCalculator.php
│   │           │   └── Calculator.php
│   │           └── RoundingMode.php
│   ├── carbonphp
│   │   └── carbon-doctrine-types
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Carbon
│   │               └── Doctrine
│   │                   ├── CarbonDoctrineType.php
│   │                   ├── CarbonImmutableType.php
│   │                   ├── CarbonTypeConverter.php
│   │                   ├── CarbonType.php
│   │                   ├── DateTimeDefaultPrecision.php
│   │                   ├── DateTimeImmutableType.php
│   │                   └── DateTimeType.php
│   ├── composer
│   │   ├── autoload_classmap.php
│   │   ├── autoload_files.php
│   │   ├── autoload_namespaces.php
│   │   ├── autoload_psr4.php
│   │   ├── autoload_real.php
│   │   ├── autoload_static.php
│   │   ├── ClassLoader.php
│   │   ├── installed.json
│   │   ├── installed.php
│   │   ├── InstalledVersions.php
│   │   ├── LICENSE
│   │   └── platform_check.php
│   ├── dflydev
│   │   └── dot-access-data
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── DataInterface.php
│   │           ├── Data.php
│   │           ├── Exception
│   │           │   ├── DataException.php
│   │           │   ├── InvalidPathException.php
│   │           │   └── MissingPathException.php
│   │           └── Util.php
│   ├── doctrine
│   │   ├── inflector
│   │   │   ├── composer.json
│   │   │   ├── docs
│   │   │   │   └── en
│   │   │   │       └── index.rst
│   │   │   ├── lib
│   │   │   │   └── Doctrine
│   │   │   │       └── Inflector
│   │   │   │           ├── CachedWordInflector.php
│   │   │   │           ├── GenericLanguageInflectorFactory.php
│   │   │   │           ├── InflectorFactory.php
│   │   │   │           ├── Inflector.php
│   │   │   │           ├── LanguageInflectorFactory.php
│   │   │   │           ├── Language.php
│   │   │   │           ├── NoopWordInflector.php
│   │   │   │           ├── Rules
│   │   │   │           │   ├── English
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── French
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── NorwegianBokmal
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Pattern.php
│   │   │   │           │   ├── Patterns.php
│   │   │   │           │   ├── Portuguese
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Ruleset.php
│   │   │   │           │   ├── Spanish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   ├── Substitution.php
│   │   │   │           │   ├── Substitutions.php
│   │   │   │           │   ├── Transformation.php
│   │   │   │           │   ├── Transformations.php
│   │   │   │           │   ├── Turkish
│   │   │   │           │   │   ├── Inflectible.php
│   │   │   │           │   │   ├── InflectorFactory.php
│   │   │   │           │   │   ├── Rules.php
│   │   │   │           │   │   └── Uninflected.php
│   │   │   │           │   └── Word.php
│   │   │   │           ├── RulesetInflector.php
│   │   │   │           └── WordInflector.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   └── lexer
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── AbstractLexer.php
│   │       │   └── Token.php
│   │       └── UPGRADE.md
│   ├── dragonmantank
│   │   └── cron-expression
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Cron
│   │               ├── AbstractField.php
│   │               ├── CronExpression.php
│   │               ├── DayOfMonthField.php
│   │               ├── DayOfWeekField.php
│   │               ├── FieldFactoryInterface.php
│   │               ├── FieldFactory.php
│   │               ├── FieldInterface.php
│   │               ├── HoursField.php
│   │               ├── MinutesField.php
│   │               └── MonthField.php
│   ├── egulias
│   │   └── email-validator
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── CONTRIBUTING.md
│   │       ├── LICENSE
│   │       └── src
│   │           ├── EmailLexer.php
│   │           ├── EmailParser.php
│   │           ├── EmailValidator.php
│   │           ├── MessageIDParser.php
│   │           ├── Parser
│   │           │   ├── Comment.php
│   │           │   ├── CommentStrategy
│   │           │   │   ├── CommentStrategy.php
│   │           │   │   ├── DomainComment.php
│   │           │   │   └── LocalComment.php
│   │           │   ├── DomainLiteral.php
│   │           │   ├── DomainPart.php
│   │           │   ├── DoubleQuote.php
│   │           │   ├── FoldingWhiteSpace.php
│   │           │   ├── IDLeftPart.php
│   │           │   ├── IDRightPart.php
│   │           │   ├── LocalPart.php
│   │           │   └── PartParser.php
│   │           ├── Parser.php
│   │           ├── Result
│   │           │   ├── InvalidEmail.php
│   │           │   ├── MultipleErrors.php
│   │           │   ├── Reason
│   │           │   │   ├── AtextAfterCFWS.php
│   │           │   │   ├── CharNotAllowed.php
│   │           │   │   ├── CommaInDomain.php
│   │           │   │   ├── CommentsInIDRight.php
│   │           │   │   ├── ConsecutiveAt.php
│   │           │   │   ├── ConsecutiveDot.php
│   │           │   │   ├── CRLFAtTheEnd.php
│   │           │   │   ├── CRLFX2.php
│   │           │   │   ├── CRNoLF.php
│   │           │   │   ├── DetailedReason.php
│   │           │   │   ├── DomainAcceptsNoMail.php
│   │           │   │   ├── DomainHyphened.php
│   │           │   │   ├── DomainTooLong.php
│   │           │   │   ├── DotAtEnd.php
│   │           │   │   ├── DotAtStart.php
│   │           │   │   ├── EmptyReason.php
│   │           │   │   ├── ExceptionFound.php
│   │           │   │   ├── ExpectingATEXT.php
│   │           │   │   ├── ExpectingCTEXT.php
│   │           │   │   ├── ExpectingDomainLiteralClose.php
│   │           │   │   ├── ExpectingDTEXT.php
│   │           │   │   ├── LabelTooLong.php
│   │           │   │   ├── LocalOrReservedDomain.php
│   │           │   │   ├── NoDNSRecord.php
│   │           │   │   ├── NoDomainPart.php
│   │           │   │   ├── NoLocalPart.php
│   │           │   │   ├── Reason.php
│   │           │   │   ├── RFCWarnings.php
│   │           │   │   ├── SpoofEmail.php
│   │           │   │   ├── UnableToGetDNSRecord.php
│   │           │   │   ├── UnclosedComment.php
│   │           │   │   ├── UnclosedQuotedString.php
│   │           │   │   ├── UnOpenedComment.php
│   │           │   │   └── UnusualElements.php
│   │           │   ├── Result.php
│   │           │   ├── SpoofEmail.php
│   │           │   └── ValidEmail.php
│   │           ├── Validation
│   │           │   ├── DNSCheckValidation.php
│   │           │   ├── DNSGetRecordWrapper.php
│   │           │   ├── DNSRecords.php
│   │           │   ├── EmailValidation.php
│   │           │   ├── Exception
│   │           │   │   └── EmptyValidationList.php
│   │           │   ├── Extra
│   │           │   │   └── SpoofCheckValidation.php
│   │           │   ├── MessageIDValidation.php
│   │           │   ├── MultipleValidationWithAnd.php
│   │           │   ├── NoRFCWarningsValidation.php
│   │           │   └── RFCValidation.php
│   │           └── Warning
│   │               ├── AddressLiteral.php
│   │               ├── CFWSNearAt.php
│   │               ├── CFWSWithFWS.php
│   │               ├── Comment.php
│   │               ├── DeprecatedComment.php
│   │               ├── DomainLiteral.php
│   │               ├── EmailTooLong.php
│   │               ├── IPV6BadChar.php
│   │               ├── IPV6ColonEnd.php
│   │               ├── IPV6ColonStart.php
│   │               ├── IPV6Deprecated.php
│   │               ├── IPV6DoubleColon.php
│   │               ├── IPV6GroupCount.php
│   │               ├── IPV6MaxGroups.php
│   │               ├── LocalTooLong.php
│   │               ├── NoDNSMXRecord.php
│   │               ├── ObsoleteDTEXT.php
│   │               ├── QuotedPart.php
│   │               ├── QuotedString.php
│   │               ├── TLD.php
│   │               └── Warning.php
│   ├── fakerphp
│   │   └── faker
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── rector-migrate.php
│   │       └── src
│   │           ├── autoload.php
│   │           └── Faker
│   │               ├── Calculator
│   │               │   ├── Ean.php
│   │               │   ├── Iban.php
│   │               │   ├── Inn.php
│   │               │   ├── Isbn.php
│   │               │   ├── Luhn.php
│   │               │   └── TCNo.php
│   │               ├── ChanceGenerator.php
│   │               ├── Container
│   │               │   ├── ContainerBuilder.php
│   │               │   ├── ContainerException.php
│   │               │   ├── ContainerInterface.php
│   │               │   ├── Container.php
│   │               │   └── NotInContainerException.php
│   │               ├── Core
│   │               │   ├── Barcode.php
│   │               │   ├── Blood.php
│   │               │   ├── Color.php
│   │               │   ├── Coordinates.php
│   │               │   ├── DateTime.php
│   │               │   ├── File.php
│   │               │   ├── Number.php
│   │               │   ├── Uuid.php
│   │               │   └── Version.php
│   │               ├── DefaultGenerator.php
│   │               ├── Documentor.php
│   │               ├── Extension
│   │               │   ├── AddressExtension.php
│   │               │   ├── BarcodeExtension.php
│   │               │   ├── BloodExtension.php
│   │               │   ├── ColorExtension.php
│   │               │   ├── CompanyExtension.php
│   │               │   ├── CountryExtension.php
│   │               │   ├── DateTimeExtension.php
│   │               │   ├── ExtensionNotFound.php
│   │               │   ├── Extension.php
│   │               │   ├── FileExtension.php
│   │               │   ├── GeneratorAwareExtension.php
│   │               │   ├── GeneratorAwareExtensionTrait.php
│   │               │   ├── Helper.php
│   │               │   ├── NumberExtension.php
│   │               │   ├── PersonExtension.php
│   │               │   ├── PhoneNumberExtension.php
│   │               │   ├── UuidExtension.php
│   │               │   └── VersionExtension.php
│   │               ├── Factory.php
│   │               ├── Generator.php
│   │               ├── Guesser
│   │               │   └── Name.php
│   │               ├── ORM
│   │               │   ├── CakePHP
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Doctrine
│   │               │   │   ├── backward-compatibility.php
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Mandango
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Propel
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   ├── Propel2
│   │               │   │   ├── ColumnTypeGuesser.php
│   │               │   │   ├── EntityPopulator.php
│   │               │   │   └── Populator.php
│   │               │   └── Spot
│   │               │       ├── ColumnTypeGuesser.php
│   │               │       ├── EntityPopulator.php
│   │               │       └── Populator.php
│   │               ├── Provider
│   │               │   ├── Address.php
│   │               │   ├── ar_EG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── ar_JO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── ar_SA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── at_AT
│   │               │   │   └── Payment.php
│   │               │   ├── Barcode.php
│   │               │   ├── Base.php
│   │               │   ├── bg_BG
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Biased.php
│   │               │   ├── bn_BD
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Utils.php
│   │               │   ├── Color.php
│   │               │   ├── Company.php
│   │               │   ├── cs_CZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── da_DK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── DateTime.php
│   │               │   ├── de_AT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── de_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── de_DE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── el_CY
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── el_GR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── en_AU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_CA
│   │               │   │   ├── Address.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_GB
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_HK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_IN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_NG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_NZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_PH
│   │               │   │   ├── Address.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_SG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_UG
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── en_US
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── en_ZA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_AR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_ES
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── es_PE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── es_VE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── et_EE
│   │               │   │   └── Person.php
│   │               │   ├── fa_IR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── fi_FI
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── File.php
│   │               │   ├── fr_BE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── fr_CA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Person.php
│   │               │   │   └── Text.php
│   │               │   ├── fr_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── fr_FR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── he_IL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── hr_HR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── HtmlLorem.php
│   │               │   ├── hu_HU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── hy_AM
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── id_ID
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Image.php
│   │               │   ├── Internet.php
│   │               │   ├── is_IS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── it_CH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── it_IT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ja_JP
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ka_GE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── kk_KZ
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ko_KR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── Lorem.php
│   │               │   ├── lt_LT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── lv_LV
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Medical.php
│   │               │   ├── me_ME
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Miscellaneous.php
│   │               │   ├── mn_MN
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ms_MY
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Miscellaneous.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── nb_NO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ne_NP
│   │               │   │   ├── Address.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── nl_BE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── nl_NL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── Payment.php
│   │               │   ├── Person.php
│   │               │   ├── PhoneNumber.php
│   │               │   ├── pl_PL
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── LicensePlate.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── pt_BR
│   │               │   │   ├── Address.php
│   │               │   │   ├── check_digit.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── pt_PT
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── ro_MD
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ro_RO
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── ru_RU
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── sk_SK
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── sl_SI
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── sr_Cyrl_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sr_Latn_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sr_RS
│   │               │   │   ├── Address.php
│   │               │   │   ├── Payment.php
│   │               │   │   └── Person.php
│   │               │   ├── sv_SE
│   │               │   │   ├── Address.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Municipality.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── Text.php
│   │               │   ├── th_TH
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── tr_TR
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── uk_UA
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   ├── PhoneNumber.php
│   │               │   │   └── Text.php
│   │               │   ├── UserAgent.php
│   │               │   ├── Uuid.php
│   │               │   ├── vi_VN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   ├── zh_CN
│   │               │   │   ├── Address.php
│   │               │   │   ├── Color.php
│   │               │   │   ├── Company.php
│   │               │   │   ├── DateTime.php
│   │               │   │   ├── Internet.php
│   │               │   │   ├── Payment.php
│   │               │   │   ├── Person.php
│   │               │   │   └── PhoneNumber.php
│   │               │   └── zh_TW
│   │               │       ├── Address.php
│   │               │       ├── Color.php
│   │               │       ├── Company.php
│   │               │       ├── DateTime.php
│   │               │       ├── Internet.php
│   │               │       ├── Payment.php
│   │               │       ├── Person.php
│   │               │       ├── PhoneNumber.php
│   │               │       └── Text.php
│   │               ├── UniqueGenerator.php
│   │               └── ValidGenerator.php
│   ├── filp
│   │   └── whoops
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── SECURITY.md
│   │       └── src
│   │           └── Whoops
│   │               ├── Exception
│   │               │   ├── ErrorException.php
│   │               │   ├── Formatter.php
│   │               │   ├── FrameCollection.php
│   │               │   ├── Frame.php
│   │               │   └── Inspector.php
│   │               ├── Handler
│   │               │   ├── CallbackHandler.php
│   │               │   ├── HandlerInterface.php
│   │               │   ├── Handler.php
│   │               │   ├── JsonResponseHandler.php
│   │               │   ├── PlainTextHandler.php
│   │               │   ├── PrettyPageHandler.php
│   │               │   └── XmlResponseHandler.php
│   │               ├── Inspector
│   │               │   ├── InspectorFactoryInterface.php
│   │               │   ├── InspectorFactory.php
│   │               │   └── InspectorInterface.php
│   │               ├── Resources
│   │               │   ├── css
│   │               │   │   ├── prism.css
│   │               │   │   └── whoops.base.css
│   │               │   ├── js
│   │               │   │   ├── clipboard.min.js
│   │               │   │   ├── prism.js
│   │               │   │   ├── whoops.base.js
│   │               │   │   └── zepto.min.js
│   │               │   └── views
│   │               │       ├── env_details.html.php
│   │               │       ├── frame_code.html.php
│   │               │       ├── frame_list.html.php
│   │               │       ├── frames_container.html.php
│   │               │       ├── frames_description.html.php
│   │               │       ├── header.html.php
│   │               │       ├── header_outer.html.php
│   │               │       ├── layout.html.php
│   │               │       ├── panel_details.html.php
│   │               │       ├── panel_details_outer.html.php
│   │               │       ├── panel_left.html.php
│   │               │       └── panel_left_outer.html.php
│   │               ├── RunInterface.php
│   │               ├── Run.php
│   │               └── Util
│   │                   ├── HtmlDumperOutput.php
│   │                   ├── Misc.php
│   │                   ├── SystemFacade.php
│   │                   └── TemplateHelper.php
│   ├── fruitcake
│   │   └── php-cors
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── CorsService.php
│   │           └── Exceptions
│   │               └── InvalidOptionException.php
│   ├── graham-campbell
│   │   └── result-type
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── src
│   │           ├── Error.php
│   │           ├── Result.php
│   │           └── Success.php
│   ├── guzzlehttp
│   │   ├── guzzle
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── BodySummarizerInterface.php
│   │   │   │   ├── BodySummarizer.php
│   │   │   │   ├── ClientInterface.php
│   │   │   │   ├── Client.php
│   │   │   │   ├── ClientTrait.php
│   │   │   │   ├── Cookie
│   │   │   │   │   ├── CookieJarInterface.php
│   │   │   │   │   ├── CookieJar.php
│   │   │   │   │   ├── FileCookieJar.php
│   │   │   │   │   ├── SessionCookieJar.php
│   │   │   │   │   └── SetCookie.php
│   │   │   │   ├── Exception
│   │   │   │   │   ├── BadResponseException.php
│   │   │   │   │   ├── ClientException.php
│   │   │   │   │   ├── ConnectException.php
│   │   │   │   │   ├── GuzzleException.php
│   │   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   │   ├── RequestException.php
│   │   │   │   │   ├── ServerException.php
│   │   │   │   │   ├── TooManyRedirectsException.php
│   │   │   │   │   └── TransferException.php
│   │   │   │   ├── functions_include.php
│   │   │   │   ├── functions.php
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CurlFactoryInterface.php
│   │   │   │   │   ├── CurlFactory.php
│   │   │   │   │   ├── CurlHandler.php
│   │   │   │   │   ├── CurlMultiHandler.php
│   │   │   │   │   ├── EasyHandle.php
│   │   │   │   │   ├── HeaderProcessor.php
│   │   │   │   │   ├── MockHandler.php
│   │   │   │   │   ├── Proxy.php
│   │   │   │   │   └── StreamHandler.php
│   │   │   │   ├── HandlerStack.php
│   │   │   │   ├── MessageFormatterInterface.php
│   │   │   │   ├── MessageFormatter.php
│   │   │   │   ├── Middleware.php
│   │   │   │   ├── Pool.php
│   │   │   │   ├── PrepareBodyMiddleware.php
│   │   │   │   ├── RedirectMiddleware.php
│   │   │   │   ├── RequestOptions.php
│   │   │   │   ├── RetryMiddleware.php
│   │   │   │   ├── TransferStats.php
│   │   │   │   └── Utils.php
│   │   │   └── UPGRADING.md
│   │   ├── promises
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── AggregateException.php
│   │   │       ├── CancellationException.php
│   │   │       ├── Coroutine.php
│   │   │       ├── Create.php
│   │   │       ├── Each.php
│   │   │       ├── EachPromise.php
│   │   │       ├── FulfilledPromise.php
│   │   │       ├── Is.php
│   │   │       ├── PromiseInterface.php
│   │   │       ├── Promise.php
│   │   │       ├── PromisorInterface.php
│   │   │       ├── RejectedPromise.php
│   │   │       ├── RejectionException.php
│   │   │       ├── TaskQueueInterface.php
│   │   │       ├── TaskQueue.php
│   │   │       └── Utils.php
│   │   ├── psr7
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── AppendStream.php
│   │   │       ├── BufferStream.php
│   │   │       ├── CachingStream.php
│   │   │       ├── DroppingStream.php
│   │   │       ├── Exception
│   │   │       │   └── MalformedUriException.php
│   │   │       ├── FnStream.php
│   │   │       ├── Header.php
│   │   │       ├── HttpFactory.php
│   │   │       ├── InflateStream.php
│   │   │       ├── LazyOpenStream.php
│   │   │       ├── LimitStream.php
│   │   │       ├── Message.php
│   │   │       ├── MessageTrait.php
│   │   │       ├── MimeType.php
│   │   │       ├── MultipartStream.php
│   │   │       ├── NoSeekStream.php
│   │   │       ├── PumpStream.php
│   │   │       ├── Query.php
│   │   │       ├── Request.php
│   │   │       ├── Response.php
│   │   │       ├── Rfc7230.php
│   │   │       ├── ServerRequest.php
│   │   │       ├── StreamDecoratorTrait.php
│   │   │       ├── Stream.php
│   │   │       ├── StreamWrapper.php
│   │   │       ├── UploadedFile.php
│   │   │       ├── UriComparator.php
│   │   │       ├── UriNormalizer.php
│   │   │       ├── Uri.php
│   │   │       ├── UriResolver.php
│   │   │       └── Utils.php
│   │   └── uri-template
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── UriTemplate.php
│   ├── hamcrest
│   │   └── hamcrest-php
│   │       ├── CHANGES.txt
│   │       ├── composer.json
│   │       ├── generator
│   │       │   ├── FactoryCall.php
│   │       │   ├── FactoryClass.php
│   │       │   ├── FactoryFile.php
│   │       │   ├── FactoryGenerator.php
│   │       │   ├── FactoryMethod.php
│   │       │   ├── FactoryParameter.php
│   │       │   ├── GlobalFunctionFile.php
│   │       │   ├── parts
│   │       │   │   ├── file_header.txt
│   │       │   │   ├── functions_footer.txt
│   │       │   │   ├── functions_header.txt
│   │       │   │   ├── functions_imports.txt
│   │       │   │   ├── matchers_footer.txt
│   │       │   │   ├── matchers_header.txt
│   │       │   │   └── matchers_imports.txt
│   │       │   ├── run.php
│   │       │   └── StaticMethodFile.php
│   │       ├── hamcrest
│   │       │   ├── Hamcrest
│   │       │   │   ├── Arrays
│   │       │   │   │   ├── IsArrayContainingInAnyOrder.php
│   │       │   │   │   ├── IsArrayContainingInOrder.php
│   │       │   │   │   ├── IsArrayContainingKey.php
│   │       │   │   │   ├── IsArrayContainingKeyValuePair.php
│   │       │   │   │   ├── IsArrayContaining.php
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsArrayWithSize.php
│   │       │   │   │   ├── MatchingOnce.php
│   │       │   │   │   └── SeriesMatchingOnce.php
│   │       │   │   ├── AssertionError.php
│   │       │   │   ├── BaseDescription.php
│   │       │   │   ├── BaseMatcher.php
│   │       │   │   ├── Collection
│   │       │   │   │   ├── IsEmptyTraversable.php
│   │       │   │   │   └── IsTraversableWithSize.php
│   │       │   │   ├── Core
│   │       │   │   │   ├── AllOf.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── CombinableMatcher.php
│   │       │   │   │   ├── DescribedAs.php
│   │       │   │   │   ├── Every.php
│   │       │   │   │   ├── HasToString.php
│   │       │   │   │   ├── IsAnything.php
│   │       │   │   │   ├── IsCollectionContaining.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsIdentical.php
│   │       │   │   │   ├── IsInstanceOf.php
│   │       │   │   │   ├── IsNot.php
│   │       │   │   │   ├── IsNull.php
│   │       │   │   │   ├── Is.php
│   │       │   │   │   ├── IsSame.php
│   │       │   │   │   ├── IsTypeOf.php
│   │       │   │   │   ├── Set.php
│   │       │   │   │   └── ShortcutCombination.php
│   │       │   │   ├── Description.php
│   │       │   │   ├── DiagnosingMatcher.php
│   │       │   │   ├── FeatureMatcher.php
│   │       │   │   ├── Internal
│   │       │   │   │   └── SelfDescribingValue.php
│   │       │   │   ├── MatcherAssert.php
│   │       │   │   ├── Matcher.php
│   │       │   │   ├── Matchers.php
│   │       │   │   ├── NullDescription.php
│   │       │   │   ├── Number
│   │       │   │   │   ├── IsCloseTo.php
│   │       │   │   │   └── OrderingComparison.php
│   │       │   │   ├── SelfDescribing.php
│   │       │   │   ├── StringDescription.php
│   │       │   │   ├── Text
│   │       │   │   │   ├── IsEmptyString.php
│   │       │   │   │   ├── IsEqualIgnoringCase.php
│   │       │   │   │   ├── IsEqualIgnoringWhiteSpace.php
│   │       │   │   │   ├── MatchesPattern.php
│   │       │   │   │   ├── StringContainsIgnoringCase.php
│   │       │   │   │   ├── StringContainsInOrder.php
│   │       │   │   │   ├── StringContains.php
│   │       │   │   │   ├── StringEndsWith.php
│   │       │   │   │   ├── StringStartsWith.php
│   │       │   │   │   └── SubstringMatcher.php
│   │       │   │   ├── Type
│   │       │   │   │   ├── IsArray.php
│   │       │   │   │   ├── IsBoolean.php
│   │       │   │   │   ├── IsCallable.php
│   │       │   │   │   ├── IsDouble.php
│   │       │   │   │   ├── IsInteger.php
│   │       │   │   │   ├── IsNumeric.php
│   │       │   │   │   ├── IsObject.php
│   │       │   │   │   ├── IsResource.php
│   │       │   │   │   ├── IsScalar.php
│   │       │   │   │   └── IsString.php
│   │       │   │   ├── TypeSafeDiagnosingMatcher.php
│   │       │   │   ├── TypeSafeMatcher.php
│   │       │   │   ├── Util.php
│   │       │   │   └── Xml
│   │       │   │       └── HasXPath.php
│   │       │   └── Hamcrest.php
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       └── tests
│   │           ├── bootstrap.php
│   │           ├── Hamcrest
│   │           │   ├── AbstractMatcherTest.php
│   │           │   ├── Array
│   │           │   │   ├── IsArrayContainingInAnyOrderTest.php
│   │           │   │   ├── IsArrayContainingInOrderTest.php
│   │           │   │   ├── IsArrayContainingKeyTest.php
│   │           │   │   ├── IsArrayContainingKeyValuePairTest.php
│   │           │   │   ├── IsArrayContainingTest.php
│   │           │   │   ├── IsArrayTest.php
│   │           │   │   └── IsArrayWithSizeTest.php
│   │           │   ├── BaseMatcherTest.php
│   │           │   ├── Collection
│   │           │   │   ├── IsEmptyTraversableTest.php
│   │           │   │   └── IsTraversableWithSizeTest.php
│   │           │   ├── Core
│   │           │   │   ├── AllOfTest.php
│   │           │   │   ├── AnyOfTest.php
│   │           │   │   ├── CombinableMatcherTest.php
│   │           │   │   ├── DescribedAsTest.php
│   │           │   │   ├── EveryTest.php
│   │           │   │   ├── HasToStringTest.php
│   │           │   │   ├── IsAnythingTest.php
│   │           │   │   ├── IsCollectionContainingTest.php
│   │           │   │   ├── IsEqualTest.php
│   │           │   │   ├── IsIdenticalTest.php
│   │           │   │   ├── IsInstanceOfTest.php
│   │           │   │   ├── IsNotTest.php
│   │           │   │   ├── IsNullTest.php
│   │           │   │   ├── IsSameTest.php
│   │           │   │   ├── IsTest.php
│   │           │   │   ├── IsTypeOfTest.php
│   │           │   │   ├── SampleBaseClass.php
│   │           │   │   ├── SampleSubClass.php
│   │           │   │   └── SetTest.php
│   │           │   ├── FeatureMatcherTest.php
│   │           │   ├── InvokedMatcherTest.php
│   │           │   ├── MatcherAssertTest.php
│   │           │   ├── Number
│   │           │   │   ├── IsCloseToTest.php
│   │           │   │   └── OrderingComparisonTest.php
│   │           │   ├── StringDescriptionTest.php
│   │           │   ├── Text
│   │           │   │   ├── IsEmptyStringTest.php
│   │           │   │   ├── IsEqualIgnoringCaseTest.php
│   │           │   │   ├── IsEqualIgnoringWhiteSpaceTest.php
│   │           │   │   ├── MatchesPatternTest.php
│   │           │   │   ├── StringContainsIgnoringCaseTest.php
│   │           │   │   ├── StringContainsInOrderTest.php
│   │           │   │   ├── StringContainsTest.php
│   │           │   │   ├── StringEndsWithTest.php
│   │           │   │   └── StringStartsWithTest.php
│   │           │   ├── Type
│   │           │   │   ├── IsArrayTest.php
│   │           │   │   ├── IsBooleanTest.php
│   │           │   │   ├── IsCallableTest.php
│   │           │   │   ├── IsDoubleTest.php
│   │           │   │   ├── IsIntegerTest.php
│   │           │   │   ├── IsNumericTest.php
│   │           │   │   ├── IsObjectTest.php
│   │           │   │   ├── IsResourceTest.php
│   │           │   │   ├── IsScalarTest.php
│   │           │   │   └── IsStringTest.php
│   │           │   ├── UtilTest.php
│   │           │   └── Xml
│   │           │       └── HasXPathTest.php
│   │           └── phpunit.xml.dist
│   ├── laravel
│   │   ├── framework
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   ├── RELEASE.md
│   │   │   └── src
│   │   │       └── Illuminate
│   │   │           ├── Auth
│   │   │           │   ├── Access
│   │   │           │   │   ├── AuthorizationException.php
│   │   │           │   │   ├── Events
│   │   │           │   │   │   └── GateEvaluated.php
│   │   │           │   │   ├── Gate.php
│   │   │           │   │   ├── HandlesAuthorization.php
│   │   │           │   │   └── Response.php
│   │   │           │   ├── Authenticatable.php
│   │   │           │   ├── AuthenticationException.php
│   │   │           │   ├── AuthManager.php
│   │   │           │   ├── AuthServiceProvider.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── ClearResetsCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── make
│   │   │           │   │           └── views
│   │   │           │   │               └── layouts
│   │   │           │   │                   └── app.stub
│   │   │           │   ├── CreatesUserProviders.php
│   │   │           │   ├── DatabaseUserProvider.php
│   │   │           │   ├── EloquentUserProvider.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── Attempting.php
│   │   │           │   │   ├── Authenticated.php
│   │   │           │   │   ├── CurrentDeviceLogout.php
│   │   │           │   │   ├── Failed.php
│   │   │           │   │   ├── Lockout.php
│   │   │           │   │   ├── Login.php
│   │   │           │   │   ├── Logout.php
│   │   │           │   │   ├── OtherDeviceLogout.php
│   │   │           │   │   ├── PasswordReset.php
│   │   │           │   │   ├── Registered.php
│   │   │           │   │   ├── Validated.php
│   │   │           │   │   └── Verified.php
│   │   │           │   ├── GenericUser.php
│   │   │           │   ├── GuardHelpers.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Listeners
│   │   │           │   │   └── SendEmailVerificationNotification.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── Authenticate.php
│   │   │           │   │   ├── AuthenticateWithBasicAuth.php
│   │   │           │   │   ├── Authorize.php
│   │   │           │   │   ├── EnsureEmailIsVerified.php
│   │   │           │   │   └── RequirePassword.php
│   │   │           │   ├── MustVerifyEmail.php
│   │   │           │   ├── Notifications
│   │   │           │   │   ├── ResetPassword.php
│   │   │           │   │   └── VerifyEmail.php
│   │   │           │   ├── Passwords
│   │   │           │   │   ├── CanResetPassword.php
│   │   │           │   │   ├── DatabaseTokenRepository.php
│   │   │           │   │   ├── PasswordBrokerManager.php
│   │   │           │   │   ├── PasswordBroker.php
│   │   │           │   │   ├── PasswordResetServiceProvider.php
│   │   │           │   │   └── TokenRepositoryInterface.php
│   │   │           │   ├── Recaller.php
│   │   │           │   ├── RequestGuard.php
│   │   │           │   ├── SessionGuard.php
│   │   │           │   └── TokenGuard.php
│   │   │           ├── Broadcasting
│   │   │           │   ├── BroadcastController.php
│   │   │           │   ├── Broadcasters
│   │   │           │   │   ├── AblyBroadcaster.php
│   │   │           │   │   ├── Broadcaster.php
│   │   │           │   │   ├── LogBroadcaster.php
│   │   │           │   │   ├── NullBroadcaster.php
│   │   │           │   │   ├── PusherBroadcaster.php
│   │   │           │   │   ├── RedisBroadcaster.php
│   │   │           │   │   └── UsePusherChannelConventions.php
│   │   │           │   ├── BroadcastEvent.php
│   │   │           │   ├── BroadcastException.php
│   │   │           │   ├── BroadcastManager.php
│   │   │           │   ├── BroadcastServiceProvider.php
│   │   │           │   ├── Channel.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── EncryptedPrivateChannel.php
│   │   │           │   ├── InteractsWithBroadcasting.php
│   │   │           │   ├── InteractsWithSockets.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── PendingBroadcast.php
│   │   │           │   ├── PresenceChannel.php
│   │   │           │   ├── PrivateChannel.php
│   │   │           │   └── UniqueBroadcastEvent.php
│   │   │           ├── Bus
│   │   │           │   ├── Batchable.php
│   │   │           │   ├── BatchFactory.php
│   │   │           │   ├── Batch.php
│   │   │           │   ├── BatchRepository.php
│   │   │           │   ├── BusServiceProvider.php
│   │   │           │   ├── ChainedBatch.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── DatabaseBatchRepository.php
│   │   │           │   ├── Dispatcher.php
│   │   │           │   ├── DynamoBatchRepository.php
│   │   │           │   ├── Events
│   │   │           │   │   └── BatchDispatched.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── PendingBatch.php
│   │   │           │   ├── PrunableBatchRepository.php
│   │   │           │   ├── Queueable.php
│   │   │           │   ├── UniqueLock.php
│   │   │           │   └── UpdatedBatchJobCounts.php
│   │   │           ├── Cache
│   │   │           │   ├── ApcStore.php
│   │   │           │   ├── ApcWrapper.php
│   │   │           │   ├── ArrayLock.php
│   │   │           │   ├── ArrayStore.php
│   │   │           │   ├── CacheLock.php
│   │   │           │   ├── CacheManager.php
│   │   │           │   ├── CacheServiceProvider.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── CacheTableCommand.php
│   │   │           │   │   ├── ClearCommand.php
│   │   │           │   │   ├── ForgetCommand.php
│   │   │           │   │   ├── PruneStaleTagsCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── cache.stub
│   │   │           │   ├── DatabaseLock.php
│   │   │           │   ├── DatabaseStore.php
│   │   │           │   ├── DynamoDbLock.php
│   │   │           │   ├── DynamoDbStore.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── CacheEvent.php
│   │   │           │   │   ├── CacheHit.php
│   │   │           │   │   ├── CacheMissed.php
│   │   │           │   │   ├── KeyForgotten.php
│   │   │           │   │   └── KeyWritten.php
│   │   │           │   ├── FileLock.php
│   │   │           │   ├── FileStore.php
│   │   │           │   ├── HasCacheLock.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Lock.php
│   │   │           │   ├── LuaScripts.php
│   │   │           │   ├── MemcachedConnector.php
│   │   │           │   ├── MemcachedLock.php
│   │   │           │   ├── MemcachedStore.php
│   │   │           │   ├── NoLock.php
│   │   │           │   ├── NullStore.php
│   │   │           │   ├── PhpRedisLock.php
│   │   │           │   ├── RateLimiter.php
│   │   │           │   ├── RateLimiting
│   │   │           │   │   ├── GlobalLimit.php
│   │   │           │   │   ├── Limit.php
│   │   │           │   │   └── Unlimited.php
│   │   │           │   ├── RedisLock.php
│   │   │           │   ├── RedisStore.php
│   │   │           │   ├── RedisTaggedCache.php
│   │   │           │   ├── RedisTagSet.php
│   │   │           │   ├── Repository.php
│   │   │           │   ├── RetrievesMultipleKeys.php
│   │   │           │   ├── TaggableStore.php
│   │   │           │   ├── TaggedCache.php
│   │   │           │   └── TagSet.php
│   │   │           ├── Collections
│   │   │           │   ├── Arr.php
│   │   │           │   ├── Collection.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Enumerable.php
│   │   │           │   ├── helpers.php
│   │   │           │   ├── HigherOrderCollectionProxy.php
│   │   │           │   ├── ItemNotFoundException.php
│   │   │           │   ├── LazyCollection.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── MultipleItemsFoundException.php
│   │   │           │   └── Traits
│   │   │           │       └── EnumeratesValues.php
│   │   │           ├── Conditionable
│   │   │           │   ├── composer.json
│   │   │           │   ├── HigherOrderWhenProxy.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── Traits
│   │   │           │       └── Conditionable.php
│   │   │           ├── Config
│   │   │           │   ├── composer.json
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── Repository.php
│   │   │           ├── Console
│   │   │           │   ├── Application.php
│   │   │           │   ├── BufferedConsoleOutput.php
│   │   │           │   ├── CacheCommandMutex.php
│   │   │           │   ├── CommandMutex.php
│   │   │           │   ├── Command.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── CallsCommands.php
│   │   │           │   │   ├── ConfiguresPrompts.php
│   │   │           │   │   ├── CreatesMatchingTest.php
│   │   │           │   │   ├── HasParameters.php
│   │   │           │   │   ├── InteractsWithIO.php
│   │   │           │   │   ├── InteractsWithSignals.php
│   │   │           │   │   └── PromptsForMissingInput.php
│   │   │           │   ├── ConfirmableTrait.php
│   │   │           │   ├── ContainerCommandLoader.php
│   │   │           │   ├── Contracts
│   │   │           │   │   └── NewLineAware.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── ArtisanStarting.php
│   │   │           │   │   ├── CommandFinished.php
│   │   │           │   │   ├── CommandStarting.php
│   │   │           │   │   ├── ScheduledBackgroundTaskFinished.php
│   │   │           │   │   ├── ScheduledTaskFailed.php
│   │   │           │   │   ├── ScheduledTaskFinished.php
│   │   │           │   │   ├── ScheduledTaskSkipped.php
│   │   │           │   │   └── ScheduledTaskStarting.php
│   │   │           │   ├── GeneratorCommand.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── MigrationGeneratorCommand.php
│   │   │           │   ├── OutputStyle.php
│   │   │           │   ├── Parser.php
│   │   │           │   ├── PromptValidationException.php
│   │   │           │   ├── QuestionHelper.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       └── components
│   │   │           │   │           ├── alert.php
│   │   │           │   │           ├── bullet-list.php
│   │   │           │   │           ├── line.php
│   │   │           │   │           └── two-column-detail.php
│   │   │           │   ├── Scheduling
│   │   │           │   │   ├── CacheAware.php
│   │   │           │   │   ├── CacheEventMutex.php
│   │   │           │   │   ├── CacheSchedulingMutex.php
│   │   │           │   │   ├── CallbackEvent.php
│   │   │           │   │   ├── CommandBuilder.php
│   │   │           │   │   ├── EventMutex.php
│   │   │           │   │   ├── Event.php
│   │   │           │   │   ├── ManagesFrequencies.php
│   │   │           │   │   ├── ScheduleClearCacheCommand.php
│   │   │           │   │   ├── ScheduleFinishCommand.php
│   │   │           │   │   ├── ScheduleInterruptCommand.php
│   │   │           │   │   ├── ScheduleListCommand.php
│   │   │           │   │   ├── Schedule.php
│   │   │           │   │   ├── ScheduleRunCommand.php
│   │   │           │   │   ├── ScheduleTestCommand.php
│   │   │           │   │   ├── ScheduleWorkCommand.php
│   │   │           │   │   └── SchedulingMutex.php
│   │   │           │   ├── Signals.php
│   │   │           │   └── View
│   │   │           │       └── Components
│   │   │           │           ├── Alert.php
│   │   │           │           ├── Ask.php
│   │   │           │           ├── AskWithCompletion.php
│   │   │           │           ├── BulletList.php
│   │   │           │           ├── Choice.php
│   │   │           │           ├── Component.php
│   │   │           │           ├── Confirm.php
│   │   │           │           ├── Error.php
│   │   │           │           ├── Factory.php
│   │   │           │           ├── Info.php
│   │   │           │           ├── Line.php
│   │   │           │           ├── Mutators
│   │   │           │           │   ├── EnsureDynamicContentIsHighlighted.php
│   │   │           │           │   ├── EnsureNoPunctuation.php
│   │   │           │           │   ├── EnsurePunctuation.php
│   │   │           │           │   └── EnsureRelativePaths.php
│   │   │           │           ├── Secret.php
│   │   │           │           ├── Task.php
│   │   │           │           ├── TwoColumnDetail.php
│   │   │           │           └── Warn.php
│   │   │           ├── Container
│   │   │           │   ├── BoundMethod.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Container.php
│   │   │           │   ├── ContextualBindingBuilder.php
│   │   │           │   ├── EntryNotFoundException.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── RewindableGenerator.php
│   │   │           │   └── Util.php
│   │   │           ├── Contracts
│   │   │           │   ├── Auth
│   │   │           │   │   ├── Access
│   │   │           │   │   │   ├── Authorizable.php
│   │   │           │   │   │   └── Gate.php
│   │   │           │   │   ├── Authenticatable.php
│   │   │           │   │   ├── CanResetPassword.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Guard.php
│   │   │           │   │   ├── Middleware
│   │   │           │   │   │   └── AuthenticatesRequests.php
│   │   │           │   │   ├── MustVerifyEmail.php
│   │   │           │   │   ├── PasswordBrokerFactory.php
│   │   │           │   │   ├── PasswordBroker.php
│   │   │           │   │   ├── StatefulGuard.php
│   │   │           │   │   ├── SupportsBasicAuth.php
│   │   │           │   │   └── UserProvider.php
│   │   │           │   ├── Broadcasting
│   │   │           │   │   ├── Broadcaster.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── HasBroadcastChannel.php
│   │   │           │   │   ├── ShouldBeUnique.php
│   │   │           │   │   ├── ShouldBroadcastNow.php
│   │   │           │   │   └── ShouldBroadcast.php
│   │   │           │   ├── Bus
│   │   │           │   │   ├── Dispatcher.php
│   │   │           │   │   └── QueueingDispatcher.php
│   │   │           │   ├── Cache
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Lock.php
│   │   │           │   │   ├── LockProvider.php
│   │   │           │   │   ├── LockTimeoutException.php
│   │   │           │   │   ├── Repository.php
│   │   │           │   │   └── Store.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Config
│   │   │           │   │   └── Repository.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── Application.php
│   │   │           │   │   ├── Isolatable.php
│   │   │           │   │   ├── Kernel.php
│   │   │           │   │   └── PromptsForMissingInput.php
│   │   │           │   ├── Container
│   │   │           │   │   ├── BindingResolutionException.php
│   │   │           │   │   ├── CircularDependencyException.php
│   │   │           │   │   ├── Container.php
│   │   │           │   │   └── ContextualBindingBuilder.php
│   │   │           │   ├── Cookie
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   └── QueueingFactory.php
│   │   │           │   ├── Database
│   │   │           │   │   ├── Eloquent
│   │   │           │   │   │   ├── Builder.php
│   │   │           │   │   │   ├── Castable.php
│   │   │           │   │   │   ├── CastsAttributes.php
│   │   │           │   │   │   ├── CastsInboundAttributes.php
│   │   │           │   │   │   ├── DeviatesCastableAttributes.php
│   │   │           │   │   │   ├── SerializesCastableAttributes.php
│   │   │           │   │   │   └── SupportsPartialRelations.php
│   │   │           │   │   ├── Events
│   │   │           │   │   │   └── MigrationEvent.php
│   │   │           │   │   ├── ModelIdentifier.php
│   │   │           │   │   └── Query
│   │   │           │   │       ├── Builder.php
│   │   │           │   │       ├── ConditionExpression.php
│   │   │           │   │       └── Expression.php
│   │   │           │   ├── Debug
│   │   │           │   │   └── ExceptionHandler.php
│   │   │           │   ├── Encryption
│   │   │           │   │   ├── DecryptException.php
│   │   │           │   │   ├── Encrypter.php
│   │   │           │   │   ├── EncryptException.php
│   │   │           │   │   └── StringEncrypter.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── Dispatcher.php
│   │   │           │   │   ├── ShouldDispatchAfterCommit.php
│   │   │           │   │   └── ShouldHandleEventsAfterCommit.php
│   │   │           │   ├── Filesystem
│   │   │           │   │   ├── Cloud.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── FileNotFoundException.php
│   │   │           │   │   ├── Filesystem.php
│   │   │           │   │   └── LockTimeoutException.php
│   │   │           │   ├── Foundation
│   │   │           │   │   ├── Application.php
│   │   │           │   │   ├── CachesConfiguration.php
│   │   │           │   │   ├── CachesRoutes.php
│   │   │           │   │   ├── ExceptionRenderer.php
│   │   │           │   │   └── MaintenanceMode.php
│   │   │           │   ├── Hashing
│   │   │           │   │   └── Hasher.php
│   │   │           │   ├── Http
│   │   │           │   │   └── Kernel.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Mail
│   │   │           │   │   ├── Attachable.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Mailable.php
│   │   │           │   │   ├── Mailer.php
│   │   │           │   │   └── MailQueue.php
│   │   │           │   ├── Notifications
│   │   │           │   │   ├── Dispatcher.php
│   │   │           │   │   └── Factory.php
│   │   │           │   ├── Pagination
│   │   │           │   │   ├── CursorPaginator.php
│   │   │           │   │   ├── LengthAwarePaginator.php
│   │   │           │   │   └── Paginator.php
│   │   │           │   ├── Pipeline
│   │   │           │   │   ├── Hub.php
│   │   │           │   │   └── Pipeline.php
│   │   │           │   ├── Process
│   │   │           │   │   ├── InvokedProcess.php
│   │   │           │   │   └── ProcessResult.php
│   │   │           │   ├── Queue
│   │   │           │   │   ├── ClearableQueue.php
│   │   │           │   │   ├── EntityNotFoundException.php
│   │   │           │   │   ├── EntityResolver.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── Job.php
│   │   │           │   │   ├── Monitor.php
│   │   │           │   │   ├── QueueableCollection.php
│   │   │           │   │   ├── QueueableEntity.php
│   │   │           │   │   ├── Queue.php
│   │   │           │   │   ├── ShouldBeEncrypted.php
│   │   │           │   │   ├── ShouldBeUnique.php
│   │   │           │   │   ├── ShouldBeUniqueUntilProcessing.php
│   │   │           │   │   ├── ShouldQueueAfterCommit.php
│   │   │           │   │   └── ShouldQueue.php
│   │   │           │   ├── Redis
│   │   │           │   │   ├── Connection.php
│   │   │           │   │   ├── Connector.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   └── LimiterTimeoutException.php
│   │   │           │   ├── Routing
│   │   │           │   │   ├── BindingRegistrar.php
│   │   │           │   │   ├── Registrar.php
│   │   │           │   │   ├── ResponseFactory.php
│   │   │           │   │   ├── UrlGenerator.php
│   │   │           │   │   └── UrlRoutable.php
│   │   │           │   ├── Session
│   │   │           │   │   ├── Middleware
│   │   │           │   │   │   └── AuthenticatesSessions.php
│   │   │           │   │   └── Session.php
│   │   │           │   ├── Support
│   │   │           │   │   ├── Arrayable.php
│   │   │           │   │   ├── CanBeEscapedWhenCastToString.php
│   │   │           │   │   ├── DeferrableProvider.php
│   │   │           │   │   ├── DeferringDisplayableValue.php
│   │   │           │   │   ├── Htmlable.php
│   │   │           │   │   ├── Jsonable.php
│   │   │           │   │   ├── MessageBag.php
│   │   │           │   │   ├── MessageProvider.php
│   │   │           │   │   ├── Renderable.php
│   │   │           │   │   ├── Responsable.php
│   │   │           │   │   └── ValidatedData.php
│   │   │           │   ├── Translation
│   │   │           │   │   ├── HasLocalePreference.php
│   │   │           │   │   ├── Loader.php
│   │   │           │   │   └── Translator.php
│   │   │           │   ├── Validation
│   │   │           │   │   ├── DataAwareRule.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── ImplicitRule.php
│   │   │           │   │   ├── InvokableRule.php
│   │   │           │   │   ├── Rule.php
│   │   │           │   │   ├── UncompromisedVerifier.php
│   │   │           │   │   ├── ValidatesWhenResolved.php
│   │   │           │   │   ├── ValidationRule.php
│   │   │           │   │   ├── ValidatorAwareRule.php
│   │   │           │   │   └── Validator.php
│   │   │           │   └── View
│   │   │           │       ├── Engine.php
│   │   │           │       ├── Factory.php
│   │   │           │       ├── ViewCompilationException.php
│   │   │           │       └── View.php
│   │   │           ├── Cookie
│   │   │           │   ├── composer.json
│   │   │           │   ├── CookieJar.php
│   │   │           │   ├── CookieServiceProvider.php
│   │   │           │   ├── CookieValuePrefix.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── Middleware
│   │   │           │       ├── AddQueuedCookiesToResponse.php
│   │   │           │       └── EncryptCookies.php
│   │   │           ├── Database
│   │   │           │   ├── Capsule
│   │   │           │   │   └── Manager.php
│   │   │           │   ├── ClassMorphViolationException.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── BuildsQueries.php
│   │   │           │   │   ├── CompilesJsonPaths.php
│   │   │           │   │   ├── ExplainsQueries.php
│   │   │           │   │   ├── ManagesTransactions.php
│   │   │           │   │   └── ParsesSearchPath.php
│   │   │           │   ├── ConfigurationUrlParser.php
│   │   │           │   ├── ConnectionInterface.php
│   │   │           │   ├── Connection.php
│   │   │           │   ├── ConnectionResolverInterface.php
│   │   │           │   ├── ConnectionResolver.php
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── ConnectionFactory.php
│   │   │           │   │   ├── ConnectorInterface.php
│   │   │           │   │   ├── Connector.php
│   │   │           │   │   ├── MySqlConnector.php
│   │   │           │   │   ├── PostgresConnector.php
│   │   │           │   │   ├── SQLiteConnector.php
│   │   │           │   │   └── SqlServerConnector.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── DatabaseInspectionCommand.php
│   │   │           │   │   ├── DbCommand.php
│   │   │           │   │   ├── DumpCommand.php
│   │   │           │   │   ├── Factories
│   │   │           │   │   │   ├── FactoryMakeCommand.php
│   │   │           │   │   │   └── stubs
│   │   │           │   │   │       └── factory.stub
│   │   │           │   │   ├── Migrations
│   │   │           │   │   │   ├── BaseCommand.php
│   │   │           │   │   │   ├── FreshCommand.php
│   │   │           │   │   │   ├── InstallCommand.php
│   │   │           │   │   │   ├── MigrateCommand.php
│   │   │           │   │   │   ├── MigrateMakeCommand.php
│   │   │           │   │   │   ├── RefreshCommand.php
│   │   │           │   │   │   ├── ResetCommand.php
│   │   │           │   │   │   ├── RollbackCommand.php
│   │   │           │   │   │   ├── StatusCommand.php
│   │   │           │   │   │   └── TableGuesser.php
│   │   │           │   │   ├── MonitorCommand.php
│   │   │           │   │   ├── PruneCommand.php
│   │   │           │   │   ├── Seeds
│   │   │           │   │   │   ├── SeedCommand.php
│   │   │           │   │   │   ├── SeederMakeCommand.php
│   │   │           │   │   │   ├── stubs
│   │   │           │   │   │   │   └── seeder.stub
│   │   │           │   │   │   └── WithoutModelEvents.php
│   │   │           │   │   ├── ShowCommand.php
│   │   │           │   │   ├── ShowModelCommand.php
│   │   │           │   │   ├── TableCommand.php
│   │   │           │   │   └── WipeCommand.php
│   │   │           │   ├── DatabaseManager.php
│   │   │           │   ├── DatabaseServiceProvider.php
│   │   │           │   ├── DatabaseTransactionRecord.php
│   │   │           │   ├── DatabaseTransactionsManager.php
│   │   │           │   ├── DBAL
│   │   │           │   │   └── TimestampType.php
│   │   │           │   ├── DeadlockException.php
│   │   │           │   ├── DetectsConcurrencyErrors.php
│   │   │           │   ├── DetectsLostConnections.php
│   │   │           │   ├── Eloquent
│   │   │           │   │   ├── Attributes
│   │   │           │   │   │   ├── ObservedBy.php
│   │   │           │   │   │   └── ScopedBy.php
│   │   │           │   │   ├── BroadcastableModelEventOccurred.php
│   │   │           │   │   ├── BroadcastsEventsAfterCommit.php
│   │   │           │   │   ├── BroadcastsEvents.php
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── Casts
│   │   │           │   │   │   ├── ArrayObject.php
│   │   │           │   │   │   ├── AsArrayObject.php
│   │   │           │   │   │   ├── AsCollection.php
│   │   │           │   │   │   ├── AsEncryptedArrayObject.php
│   │   │           │   │   │   ├── AsEncryptedCollection.php
│   │   │           │   │   │   ├── AsEnumArrayObject.php
│   │   │           │   │   │   ├── AsEnumCollection.php
│   │   │           │   │   │   ├── AsStringable.php
│   │   │           │   │   │   ├── Attribute.php
│   │   │           │   │   │   └── Json.php
│   │   │           │   │   ├── Collection.php
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   ├── GuardsAttributes.php
│   │   │           │   │   │   ├── HasAttributes.php
│   │   │           │   │   │   ├── HasEvents.php
│   │   │           │   │   │   ├── HasGlobalScopes.php
│   │   │           │   │   │   ├── HasRelationships.php
│   │   │           │   │   │   ├── HasTimestamps.php
│   │   │           │   │   │   ├── HasUlids.php
│   │   │           │   │   │   ├── HasUniqueIds.php
│   │   │           │   │   │   ├── HasUuids.php
│   │   │           │   │   │   ├── HidesAttributes.php
│   │   │           │   │   │   └── QueriesRelationships.php
│   │   │           │   │   ├── Factories
│   │   │           │   │   │   ├── BelongsToManyRelationship.php
│   │   │           │   │   │   ├── BelongsToRelationship.php
│   │   │           │   │   │   ├── CrossJoinSequence.php
│   │   │           │   │   │   ├── Factory.php
│   │   │           │   │   │   ├── HasFactory.php
│   │   │           │   │   │   ├── Relationship.php
│   │   │           │   │   │   └── Sequence.php
│   │   │           │   │   ├── HigherOrderBuilderProxy.php
│   │   │           │   │   ├── InvalidCastException.php
│   │   │           │   │   ├── JsonEncodingException.php
│   │   │           │   │   ├── MassAssignmentException.php
│   │   │           │   │   ├── MassPrunable.php
│   │   │           │   │   ├── MissingAttributeException.php
│   │   │           │   │   ├── ModelNotFoundException.php
│   │   │           │   │   ├── Model.php
│   │   │           │   │   ├── PendingHasThroughRelationship.php
│   │   │           │   │   ├── Prunable.php
│   │   │           │   │   ├── QueueEntityResolver.php
│   │   │           │   │   ├── RelationNotFoundException.php
│   │   │           │   │   ├── Relations
│   │   │           │   │   │   ├── BelongsToMany.php
│   │   │           │   │   │   ├── BelongsTo.php
│   │   │           │   │   │   ├── Concerns
│   │   │           │   │   │   │   ├── AsPivot.php
│   │   │           │   │   │   │   ├── CanBeOneOfMany.php
│   │   │           │   │   │   │   ├── ComparesRelatedModels.php
│   │   │           │   │   │   │   ├── InteractsWithDictionary.php
│   │   │           │   │   │   │   ├── InteractsWithPivotTable.php
│   │   │           │   │   │   │   └── SupportsDefaultModels.php
│   │   │           │   │   │   ├── HasMany.php
│   │   │           │   │   │   ├── HasManyThrough.php
│   │   │           │   │   │   ├── HasOneOrMany.php
│   │   │           │   │   │   ├── HasOne.php
│   │   │           │   │   │   ├── HasOneThrough.php
│   │   │           │   │   │   ├── MorphMany.php
│   │   │           │   │   │   ├── MorphOneOrMany.php
│   │   │           │   │   │   ├── MorphOne.php
│   │   │           │   │   │   ├── MorphPivot.php
│   │   │           │   │   │   ├── MorphToMany.php
│   │   │           │   │   │   ├── MorphTo.php
│   │   │           │   │   │   ├── Pivot.php
│   │   │           │   │   │   └── Relation.php
│   │   │           │   │   ├── Scope.php
│   │   │           │   │   ├── SoftDeletes.php
│   │   │           │   │   └── SoftDeletingScope.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── ConnectionEstablished.php
│   │   │           │   │   ├── ConnectionEvent.php
│   │   │           │   │   ├── DatabaseBusy.php
│   │   │           │   │   ├── DatabaseRefreshed.php
│   │   │           │   │   ├── MigrationEnded.php
│   │   │           │   │   ├── MigrationEvent.php
│   │   │           │   │   ├── MigrationsEnded.php
│   │   │           │   │   ├── MigrationsEvent.php
│   │   │           │   │   ├── MigrationsStarted.php
│   │   │           │   │   ├── MigrationStarted.php
│   │   │           │   │   ├── ModelPruningFinished.php
│   │   │           │   │   ├── ModelPruningStarting.php
│   │   │           │   │   ├── ModelsPruned.php
│   │   │           │   │   ├── NoPendingMigrations.php
│   │   │           │   │   ├── QueryExecuted.php
│   │   │           │   │   ├── SchemaDumped.php
│   │   │           │   │   ├── SchemaLoaded.php
│   │   │           │   │   ├── StatementPrepared.php
│   │   │           │   │   ├── TransactionBeginning.php
│   │   │           │   │   ├── TransactionCommitted.php
│   │   │           │   │   ├── TransactionCommitting.php
│   │   │           │   │   └── TransactionRolledBack.php
│   │   │           │   ├── Grammar.php
│   │   │           │   ├── LazyLoadingViolationException.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── LostConnectionException.php
│   │   │           │   ├── Migrations
│   │   │           │   │   ├── DatabaseMigrationRepository.php
│   │   │           │   │   ├── MigrationCreator.php
│   │   │           │   │   ├── Migration.php
│   │   │           │   │   ├── MigrationRepositoryInterface.php
│   │   │           │   │   ├── Migrator.php
│   │   │           │   │   └── stubs
│   │   │           │   │       ├── migration.create.stub
│   │   │           │   │       ├── migration.stub
│   │   │           │   │       └── migration.update.stub
│   │   │           │   ├── MigrationServiceProvider.php
│   │   │           │   ├── MultipleColumnsSelectedException.php
│   │   │           │   ├── MultipleRecordsFoundException.php
│   │   │           │   ├── MySqlConnection.php
│   │   │           │   ├── PDO
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   └── ConnectsToDatabase.php
│   │   │           │   │   ├── Connection.php
│   │   │           │   │   ├── MySqlDriver.php
│   │   │           │   │   ├── PostgresDriver.php
│   │   │           │   │   ├── SQLiteDriver.php
│   │   │           │   │   ├── SqlServerConnection.php
│   │   │           │   │   └── SqlServerDriver.php
│   │   │           │   ├── PostgresConnection.php
│   │   │           │   ├── Query
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── Expression.php
│   │   │           │   │   ├── Grammars
│   │   │           │   │   │   ├── Grammar.php
│   │   │           │   │   │   ├── MySqlGrammar.php
│   │   │           │   │   │   ├── PostgresGrammar.php
│   │   │           │   │   │   ├── SQLiteGrammar.php
│   │   │           │   │   │   └── SqlServerGrammar.php
│   │   │           │   │   ├── IndexHint.php
│   │   │           │   │   ├── JoinClause.php
│   │   │           │   │   ├── JoinLateralClause.php
│   │   │           │   │   └── Processors
│   │   │           │   │       ├── MySqlProcessor.php
│   │   │           │   │       ├── PostgresProcessor.php
│   │   │           │   │       ├── Processor.php
│   │   │           │   │       ├── SQLiteProcessor.php
│   │   │           │   │       └── SqlServerProcessor.php
│   │   │           │   ├── QueryException.php
│   │   │           │   ├── README.md
│   │   │           │   ├── RecordsNotFoundException.php
│   │   │           │   ├── Schema
│   │   │           │   │   ├── Blueprint.php
│   │   │           │   │   ├── Builder.php
│   │   │           │   │   ├── ColumnDefinition.php
│   │   │           │   │   ├── ForeignIdColumnDefinition.php
│   │   │           │   │   ├── ForeignKeyDefinition.php
│   │   │           │   │   ├── Grammars
│   │   │           │   │   │   ├── ChangeColumn.php
│   │   │           │   │   │   ├── Grammar.php
│   │   │           │   │   │   ├── MySqlGrammar.php
│   │   │           │   │   │   ├── PostgresGrammar.php
│   │   │           │   │   │   ├── RenameColumn.php
│   │   │           │   │   │   ├── SQLiteGrammar.php
│   │   │           │   │   │   └── SqlServerGrammar.php
│   │   │           │   │   ├── IndexDefinition.php
│   │   │           │   │   ├── MySqlBuilder.php
│   │   │           │   │   ├── MySqlSchemaState.php
│   │   │           │   │   ├── PostgresBuilder.php
│   │   │           │   │   ├── PostgresSchemaState.php
│   │   │           │   │   ├── SchemaState.php
│   │   │           │   │   ├── SQLiteBuilder.php
│   │   │           │   │   ├── SqliteSchemaState.php
│   │   │           │   │   └── SqlServerBuilder.php
│   │   │           │   ├── Seeder.php
│   │   │           │   ├── SQLiteConnection.php
│   │   │           │   ├── SQLiteDatabaseDoesNotExistException.php
│   │   │           │   ├── SqlServerConnection.php
│   │   │           │   └── UniqueConstraintViolationException.php
│   │   │           ├── Encryption
│   │   │           │   ├── composer.json
│   │   │           │   ├── Encrypter.php
│   │   │           │   ├── EncryptionServiceProvider.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── MissingAppKeyException.php
│   │   │           ├── Events
│   │   │           │   ├── CallQueuedListener.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Dispatcher.php
│   │   │           │   ├── EventServiceProvider.php
│   │   │           │   ├── functions.php
│   │   │           │   ├── InvokeQueuedClosure.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── NullDispatcher.php
│   │   │           │   └── QueuedClosure.php
│   │   │           ├── Filesystem
│   │   │           │   ├── AwsS3V3Adapter.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── FilesystemAdapter.php
│   │   │           │   ├── FilesystemManager.php
│   │   │           │   ├── Filesystem.php
│   │   │           │   ├── FilesystemServiceProvider.php
│   │   │           │   ├── functions.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── LockableFile.php
│   │   │           ├── Foundation
│   │   │           │   ├── AliasLoader.php
│   │   │           │   ├── Application.php
│   │   │           │   ├── Auth
│   │   │           │   │   ├── Access
│   │   │           │   │   │   ├── Authorizable.php
│   │   │           │   │   │   └── AuthorizesRequests.php
│   │   │           │   │   ├── EmailVerificationRequest.php
│   │   │           │   │   └── User.php
│   │   │           │   ├── Bootstrap
│   │   │           │   │   ├── BootProviders.php
│   │   │           │   │   ├── HandleExceptions.php
│   │   │           │   │   ├── LoadConfiguration.php
│   │   │           │   │   ├── LoadEnvironmentVariables.php
│   │   │           │   │   ├── RegisterFacades.php
│   │   │           │   │   ├── RegisterProviders.php
│   │   │           │   │   └── SetRequestForConsole.php
│   │   │           │   ├── Bus
│   │   │           │   │   ├── Dispatchable.php
│   │   │           │   │   ├── DispatchesJobs.php
│   │   │           │   │   ├── PendingChain.php
│   │   │           │   │   ├── PendingClosureDispatch.php
│   │   │           │   │   └── PendingDispatch.php
│   │   │           │   ├── CacheBasedMaintenanceMode.php
│   │   │           │   ├── ComposerScripts.php
│   │   │           │   ├── Concerns
│   │   │           │   │   └── ResolvesDumpSource.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── AboutCommand.php
│   │   │           │   │   ├── CastMakeCommand.php
│   │   │           │   │   ├── ChannelListCommand.php
│   │   │           │   │   ├── ChannelMakeCommand.php
│   │   │           │   │   ├── ClearCompiledCommand.php
│   │   │           │   │   ├── CliDumper.php
│   │   │           │   │   ├── ClosureCommand.php
│   │   │           │   │   ├── ComponentMakeCommand.php
│   │   │           │   │   ├── ConfigCacheCommand.php
│   │   │           │   │   ├── ConfigClearCommand.php
│   │   │           │   │   ├── ConfigShowCommand.php
│   │   │           │   │   ├── ConsoleMakeCommand.php
│   │   │           │   │   ├── DocsCommand.php
│   │   │           │   │   ├── DownCommand.php
│   │   │           │   │   ├── EnvironmentCommand.php
│   │   │           │   │   ├── EnvironmentDecryptCommand.php
│   │   │           │   │   ├── EnvironmentEncryptCommand.php
│   │   │           │   │   ├── EventCacheCommand.php
│   │   │           │   │   ├── EventClearCommand.php
│   │   │           │   │   ├── EventGenerateCommand.php
│   │   │           │   │   ├── EventListCommand.php
│   │   │           │   │   ├── EventMakeCommand.php
│   │   │           │   │   ├── ExceptionMakeCommand.php
│   │   │           │   │   ├── JobMakeCommand.php
│   │   │           │   │   ├── Kernel.php
│   │   │           │   │   ├── KeyGenerateCommand.php
│   │   │           │   │   ├── LangPublishCommand.php
│   │   │           │   │   ├── ListenerMakeCommand.php
│   │   │           │   │   ├── MailMakeCommand.php
│   │   │           │   │   ├── ModelMakeCommand.php
│   │   │           │   │   ├── NotificationMakeCommand.php
│   │   │           │   │   ├── ObserverMakeCommand.php
│   │   │           │   │   ├── OptimizeClearCommand.php
│   │   │           │   │   ├── OptimizeCommand.php
│   │   │           │   │   ├── PackageDiscoverCommand.php
│   │   │           │   │   ├── PolicyMakeCommand.php
│   │   │           │   │   ├── ProviderMakeCommand.php
│   │   │           │   │   ├── QueuedCommand.php
│   │   │           │   │   ├── RequestMakeCommand.php
│   │   │           │   │   ├── ResourceMakeCommand.php
│   │   │           │   │   ├── RouteCacheCommand.php
│   │   │           │   │   ├── RouteClearCommand.php
│   │   │           │   │   ├── RouteListCommand.php
│   │   │           │   │   ├── RuleMakeCommand.php
│   │   │           │   │   ├── ScopeMakeCommand.php
│   │   │           │   │   ├── ServeCommand.php
│   │   │           │   │   ├── StorageLinkCommand.php
│   │   │           │   │   ├── StorageUnlinkCommand.php
│   │   │           │   │   ├── StubPublishCommand.php
│   │   │           │   │   ├── stubs
│   │   │           │   │   │   ├── cast.inbound.stub
│   │   │           │   │   │   ├── cast.stub
│   │   │           │   │   │   ├── channel.stub
│   │   │           │   │   │   ├── console.stub
│   │   │           │   │   │   ├── event.stub
│   │   │           │   │   │   ├── exception-render-report.stub
│   │   │           │   │   │   ├── exception-render.stub
│   │   │           │   │   │   ├── exception-report.stub
│   │   │           │   │   │   ├── exception.stub
│   │   │           │   │   │   ├── job.queued.stub
│   │   │           │   │   │   ├── job.stub
│   │   │           │   │   │   ├── listener-duck.stub
│   │   │           │   │   │   ├── listener-queued-duck.stub
│   │   │           │   │   │   ├── listener-queued.stub
│   │   │           │   │   │   ├── listener.stub
│   │   │           │   │   │   ├── mail.stub
│   │   │           │   │   │   ├── maintenance-mode.stub
│   │   │           │   │   │   ├── markdown-mail.stub
│   │   │           │   │   │   ├── markdown-notification.stub
│   │   │           │   │   │   ├── markdown.stub
│   │   │           │   │   │   ├── model.morph-pivot.stub
│   │   │           │   │   │   ├── model.pivot.stub
│   │   │           │   │   │   ├── model.stub
│   │   │           │   │   │   ├── notification.stub
│   │   │           │   │   │   ├── observer.plain.stub
│   │   │           │   │   │   ├── observer.stub
│   │   │           │   │   │   ├── pest.stub
│   │   │           │   │   │   ├── pest.unit.stub
│   │   │           │   │   │   ├── policy.plain.stub
│   │   │           │   │   │   ├── policy.stub
│   │   │           │   │   │   ├── provider.stub
│   │   │           │   │   │   ├── request.stub
│   │   │           │   │   │   ├── resource-collection.stub
│   │   │           │   │   │   ├── resource.stub
│   │   │           │   │   │   ├── routes.stub
│   │   │           │   │   │   ├── rule.implicit.stub
│   │   │           │   │   │   ├── rule.stub
│   │   │           │   │   │   ├── scope.stub
│   │   │           │   │   │   ├── test.stub
│   │   │           │   │   │   ├── test.unit.stub
│   │   │           │   │   │   ├── view-component.stub
│   │   │           │   │   │   ├── view.pest.stub
│   │   │           │   │   │   ├── view.stub
│   │   │           │   │   │   └── view.test.stub
│   │   │           │   │   ├── TestMakeCommand.php
│   │   │           │   │   ├── UpCommand.php
│   │   │           │   │   ├── VendorPublishCommand.php
│   │   │           │   │   ├── ViewCacheCommand.php
│   │   │           │   │   ├── ViewClearCommand.php
│   │   │           │   │   └── ViewMakeCommand.php
│   │   │           │   ├── EnvironmentDetector.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── DiscoverEvents.php
│   │   │           │   │   ├── Dispatchable.php
│   │   │           │   │   ├── LocaleUpdated.php
│   │   │           │   │   ├── MaintenanceModeDisabled.php
│   │   │           │   │   ├── MaintenanceModeEnabled.php
│   │   │           │   │   ├── PublishingStubs.php
│   │   │           │   │   └── VendorTagPublished.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── Handler.php
│   │   │           │   │   ├── RegisterErrorViewPaths.php
│   │   │           │   │   ├── ReportableHandler.php
│   │   │           │   │   ├── views
│   │   │           │   │   │   ├── 401.blade.php
│   │   │           │   │   │   ├── 402.blade.php
│   │   │           │   │   │   ├── 403.blade.php
│   │   │           │   │   │   ├── 404.blade.php
│   │   │           │   │   │   ├── 419.blade.php
│   │   │           │   │   │   ├── 429.blade.php
│   │   │           │   │   │   ├── 500.blade.php
│   │   │           │   │   │   ├── 503.blade.php
│   │   │           │   │   │   ├── layout.blade.php
│   │   │           │   │   │   └── minimal.blade.php
│   │   │           │   │   └── Whoops
│   │   │           │   │       ├── WhoopsExceptionRenderer.php
│   │   │           │   │       └── WhoopsHandler.php
│   │   │           │   ├── FileBasedMaintenanceMode.php
│   │   │           │   ├── helpers.php
│   │   │           │   ├── Http
│   │   │           │   │   ├── Events
│   │   │           │   │   │   └── RequestHandled.php
│   │   │           │   │   ├── FormRequest.php
│   │   │           │   │   ├── HtmlDumper.php
│   │   │           │   │   ├── Kernel.php
│   │   │           │   │   ├── MaintenanceModeBypassCookie.php
│   │   │           │   │   └── Middleware
│   │   │           │   │       ├── CheckForMaintenanceMode.php
│   │   │           │   │       ├── ConvertEmptyStringsToNull.php
│   │   │           │   │       ├── HandlePrecognitiveRequests.php
│   │   │           │   │       ├── PreventRequestsDuringMaintenance.php
│   │   │           │   │       ├── TransformsRequest.php
│   │   │           │   │       ├── TrimStrings.php
│   │   │           │   │       ├── ValidatePostSize.php
│   │   │           │   │       └── VerifyCsrfToken.php
│   │   │           │   ├── Inspiring.php
│   │   │           │   ├── MaintenanceModeManager.php
│   │   │           │   ├── Mix.php
│   │   │           │   ├── PackageManifest.php
│   │   │           │   ├── Precognition.php
│   │   │           │   ├── ProviderRepository.php
│   │   │           │   ├── Providers
│   │   │           │   │   ├── ArtisanServiceProvider.php
│   │   │           │   │   ├── ComposerServiceProvider.php
│   │   │           │   │   ├── ConsoleSupportServiceProvider.php
│   │   │           │   │   ├── FormRequestServiceProvider.php
│   │   │           │   │   └── FoundationServiceProvider.php
│   │   │           │   ├── resources
│   │   │           │   │   └── server.php
│   │   │           │   ├── Routing
│   │   │           │   │   ├── PrecognitionCallableDispatcher.php
│   │   │           │   │   └── PrecognitionControllerDispatcher.php
│   │   │           │   ├── stubs
│   │   │           │   │   └── facade.stub
│   │   │           │   ├── Support
│   │   │           │   │   └── Providers
│   │   │           │   │       ├── AuthServiceProvider.php
│   │   │           │   │       ├── EventServiceProvider.php
│   │   │           │   │       └── RouteServiceProvider.php
│   │   │           │   ├── Testing
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   ├── InteractsWithAuthentication.php
│   │   │           │   │   │   ├── InteractsWithConsole.php
│   │   │           │   │   │   ├── InteractsWithContainer.php
│   │   │           │   │   │   ├── InteractsWithDatabase.php
│   │   │           │   │   │   ├── InteractsWithDeprecationHandling.php
│   │   │           │   │   │   ├── InteractsWithExceptionHandling.php
│   │   │           │   │   │   ├── InteractsWithRedis.php
│   │   │           │   │   │   ├── InteractsWithSession.php
│   │   │           │   │   │   ├── InteractsWithTestCaseLifecycle.php
│   │   │           │   │   │   ├── InteractsWithTime.php
│   │   │           │   │   │   ├── InteractsWithViews.php
│   │   │           │   │   │   └── MakesHttpRequests.php
│   │   │           │   │   ├── DatabaseMigrations.php
│   │   │           │   │   ├── DatabaseTransactionsManager.php
│   │   │           │   │   ├── DatabaseTransactions.php
│   │   │           │   │   ├── DatabaseTruncation.php
│   │   │           │   │   ├── LazilyRefreshDatabase.php
│   │   │           │   │   ├── RefreshDatabase.php
│   │   │           │   │   ├── RefreshDatabaseState.php
│   │   │           │   │   ├── TestCase.php
│   │   │           │   │   ├── Traits
│   │   │           │   │   │   └── CanConfigureMigrationCommands.php
│   │   │           │   │   ├── WithConsoleEvents.php
│   │   │           │   │   ├── WithFaker.php
│   │   │           │   │   ├── WithoutEvents.php
│   │   │           │   │   ├── WithoutMiddleware.php
│   │   │           │   │   └── Wormhole.php
│   │   │           │   ├── Validation
│   │   │           │   │   └── ValidatesRequests.php
│   │   │           │   ├── ViteManifestNotFoundException.php
│   │   │           │   └── Vite.php
│   │   │           ├── Hashing
│   │   │           │   ├── AbstractHasher.php
│   │   │           │   ├── Argon2IdHasher.php
│   │   │           │   ├── ArgonHasher.php
│   │   │           │   ├── BcryptHasher.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── HashManager.php
│   │   │           │   ├── HashServiceProvider.php
│   │   │           │   └── LICENSE.md
│   │   │           ├── Http
│   │   │           │   ├── Client
│   │   │           │   │   ├── Concerns
│   │   │           │   │   │   └── DeterminesStatusCode.php
│   │   │           │   │   ├── ConnectionException.php
│   │   │           │   │   ├── Events
│   │   │           │   │   │   ├── ConnectionFailed.php
│   │   │           │   │   │   ├── RequestSending.php
│   │   │           │   │   │   └── ResponseReceived.php
│   │   │           │   │   ├── Factory.php
│   │   │           │   │   ├── HttpClientException.php
│   │   │           │   │   ├── PendingRequest.php
│   │   │           │   │   ├── Pool.php
│   │   │           │   │   ├── RequestException.php
│   │   │           │   │   ├── Request.php
│   │   │           │   │   ├── Response.php
│   │   │           │   │   └── ResponseSequence.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── CanBePrecognitive.php
│   │   │           │   │   ├── InteractsWithContentTypes.php
│   │   │           │   │   ├── InteractsWithFlashData.php
│   │   │           │   │   └── InteractsWithInput.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── HttpResponseException.php
│   │   │           │   │   ├── PostTooLargeException.php
│   │   │           │   │   └── ThrottleRequestsException.php
│   │   │           │   ├── FileHelpers.php
│   │   │           │   ├── File.php
│   │   │           │   ├── JsonResponse.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── AddLinkHeadersForPreloadedAssets.php
│   │   │           │   │   ├── CheckResponseForModifications.php
│   │   │           │   │   ├── FrameGuard.php
│   │   │           │   │   ├── HandleCors.php
│   │   │           │   │   ├── SetCacheHeaders.php
│   │   │           │   │   ├── TrustHosts.php
│   │   │           │   │   └── TrustProxies.php
│   │   │           │   ├── RedirectResponse.php
│   │   │           │   ├── Request.php
│   │   │           │   ├── Resources
│   │   │           │   │   ├── CollectsResources.php
│   │   │           │   │   ├── ConditionallyLoadsAttributes.php
│   │   │           │   │   ├── DelegatesToResource.php
│   │   │           │   │   ├── Json
│   │   │           │   │   │   ├── AnonymousResourceCollection.php
│   │   │           │   │   │   ├── JsonResource.php
│   │   │           │   │   │   ├── PaginatedResourceResponse.php
│   │   │           │   │   │   ├── ResourceCollection.php
│   │   │           │   │   │   └── ResourceResponse.php
│   │   │           │   │   ├── MergeValue.php
│   │   │           │   │   ├── MissingValue.php
│   │   │           │   │   └── PotentiallyMissing.php
│   │   │           │   ├── Response.php
│   │   │           │   ├── ResponseTrait.php
│   │   │           │   ├── Testing
│   │   │           │   │   ├── FileFactory.php
│   │   │           │   │   ├── File.php
│   │   │           │   │   └── MimeType.php
│   │   │           │   └── UploadedFile.php
│   │   │           ├── Log
│   │   │           │   ├── composer.json
│   │   │           │   ├── Events
│   │   │           │   │   └── MessageLogged.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Logger.php
│   │   │           │   ├── LogManager.php
│   │   │           │   ├── LogServiceProvider.php
│   │   │           │   └── ParsesLogConfiguration.php
│   │   │           ├── Macroable
│   │   │           │   ├── composer.json
│   │   │           │   ├── LICENSE.md
│   │   │           │   └── Traits
│   │   │           │       └── Macroable.php
│   │   │           ├── Mail
│   │   │           │   ├── Attachment.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Events
│   │   │           │   │   ├── MessageSending.php
│   │   │           │   │   └── MessageSent.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Mailable.php
│   │   │           │   ├── Mailables
│   │   │           │   │   ├── Address.php
│   │   │           │   │   ├── Attachment.php
│   │   │           │   │   ├── Content.php
│   │   │           │   │   ├── Envelope.php
│   │   │           │   │   └── Headers.php
│   │   │           │   ├── Mailer.php
│   │   │           │   ├── MailManager.php
│   │   │           │   ├── MailServiceProvider.php
│   │   │           │   ├── Markdown.php
│   │   │           │   ├── Message.php
│   │   │           │   ├── PendingMail.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       ├── html
│   │   │           │   │       │   ├── button.blade.php
│   │   │           │   │       │   ├── footer.blade.php
│   │   │           │   │       │   ├── header.blade.php
│   │   │           │   │       │   ├── layout.blade.php
│   │   │           │   │       │   ├── message.blade.php
│   │   │           │   │       │   ├── panel.blade.php
│   │   │           │   │       │   ├── subcopy.blade.php
│   │   │           │   │       │   ├── table.blade.php
│   │   │           │   │       │   └── themes
│   │   │           │   │       │       └── default.css
│   │   │           │   │       └── text
│   │   │           │   │           ├── button.blade.php
│   │   │           │   │           ├── footer.blade.php
│   │   │           │   │           ├── header.blade.php
│   │   │           │   │           ├── layout.blade.php
│   │   │           │   │           ├── message.blade.php
│   │   │           │   │           ├── panel.blade.php
│   │   │           │   │           ├── subcopy.blade.php
│   │   │           │   │           └── table.blade.php
│   │   │           │   ├── SendQueuedMailable.php
│   │   │           │   ├── SentMessage.php
│   │   │           │   ├── TextMessage.php
│   │   │           │   └── Transport
│   │   │           │       ├── ArrayTransport.php
│   │   │           │       ├── LogTransport.php
│   │   │           │       ├── SesTransport.php
│   │   │           │       └── SesV2Transport.php
│   │   │           ├── Notifications
│   │   │           │   ├── Action.php
│   │   │           │   ├── AnonymousNotifiable.php
│   │   │           │   ├── ChannelManager.php
│   │   │           │   ├── Channels
│   │   │           │   │   ├── BroadcastChannel.php
│   │   │           │   │   ├── DatabaseChannel.php
│   │   │           │   │   └── MailChannel.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── NotificationTableCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── notifications.stub
│   │   │           │   ├── DatabaseNotificationCollection.php
│   │   │           │   ├── DatabaseNotification.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── BroadcastNotificationCreated.php
│   │   │           │   │   ├── NotificationFailed.php
│   │   │           │   │   ├── NotificationSending.php
│   │   │           │   │   └── NotificationSent.php
│   │   │           │   ├── HasDatabaseNotifications.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Messages
│   │   │           │   │   ├── BroadcastMessage.php
│   │   │           │   │   ├── DatabaseMessage.php
│   │   │           │   │   ├── MailMessage.php
│   │   │           │   │   └── SimpleMessage.php
│   │   │           │   ├── Notifiable.php
│   │   │           │   ├── Notification.php
│   │   │           │   ├── NotificationSender.php
│   │   │           │   ├── NotificationServiceProvider.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       └── email.blade.php
│   │   │           │   ├── RoutesNotifications.php
│   │   │           │   └── SendQueuedNotifications.php
│   │   │           ├── Pagination
│   │   │           │   ├── AbstractCursorPaginator.php
│   │   │           │   ├── AbstractPaginator.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── CursorPaginator.php
│   │   │           │   ├── Cursor.php
│   │   │           │   ├── LengthAwarePaginator.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── PaginationServiceProvider.php
│   │   │           │   ├── PaginationState.php
│   │   │           │   ├── Paginator.php
│   │   │           │   ├── resources
│   │   │           │   │   └── views
│   │   │           │   │       ├── bootstrap-4.blade.php
│   │   │           │   │       ├── bootstrap-5.blade.php
│   │   │           │   │       ├── default.blade.php
│   │   │           │   │       ├── semantic-ui.blade.php
│   │   │           │   │       ├── simple-bootstrap-4.blade.php
│   │   │           │   │       ├── simple-bootstrap-5.blade.php
│   │   │           │   │       ├── simple-default.blade.php
│   │   │           │   │       ├── simple-tailwind.blade.php
│   │   │           │   │       └── tailwind.blade.php
│   │   │           │   └── UrlWindow.php
│   │   │           ├── Pipeline
│   │   │           │   ├── composer.json
│   │   │           │   ├── Hub.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Pipeline.php
│   │   │           │   └── PipelineServiceProvider.php
│   │   │           ├── Process
│   │   │           │   ├── composer.json
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── ProcessFailedException.php
│   │   │           │   │   └── ProcessTimedOutException.php
│   │   │           │   ├── Factory.php
│   │   │           │   ├── FakeInvokedProcess.php
│   │   │           │   ├── FakeProcessDescription.php
│   │   │           │   ├── FakeProcessResult.php
│   │   │           │   ├── FakeProcessSequence.php
│   │   │           │   ├── InvokedProcess.php
│   │   │           │   ├── InvokedProcessPool.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── PendingProcess.php
│   │   │           │   ├── Pipe.php
│   │   │           │   ├── Pool.php
│   │   │           │   ├── ProcessPoolResults.php
│   │   │           │   └── ProcessResult.php
│   │   │           ├── Queue
│   │   │           │   ├── Attributes
│   │   │           │   │   └── WithoutRelations.php
│   │   │           │   ├── BeanstalkdQueue.php
│   │   │           │   ├── CallQueuedClosure.php
│   │   │           │   ├── CallQueuedHandler.php
│   │   │           │   ├── Capsule
│   │   │           │   │   └── Manager.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── BeanstalkdConnector.php
│   │   │           │   │   ├── ConnectorInterface.php
│   │   │           │   │   ├── DatabaseConnector.php
│   │   │           │   │   ├── NullConnector.php
│   │   │           │   │   ├── RedisConnector.php
│   │   │           │   │   ├── SqsConnector.php
│   │   │           │   │   └── SyncConnector.php
│   │   │           │   ├── Console
│   │   │           │   │   ├── BatchesTableCommand.php
│   │   │           │   │   ├── ClearCommand.php
│   │   │           │   │   ├── FailedTableCommand.php
│   │   │           │   │   ├── FlushFailedCommand.php
│   │   │           │   │   ├── ForgetFailedCommand.php
│   │   │           │   │   ├── ListenCommand.php
│   │   │           │   │   ├── ListFailedCommand.php
│   │   │           │   │   ├── MonitorCommand.php
│   │   │           │   │   ├── PruneBatchesCommand.php
│   │   │           │   │   ├── PruneFailedJobsCommand.php
│   │   │           │   │   ├── RestartCommand.php
│   │   │           │   │   ├── RetryBatchCommand.php
│   │   │           │   │   ├── RetryCommand.php
│   │   │           │   │   ├── stubs
│   │   │           │   │   │   ├── batches.stub
│   │   │           │   │   │   ├── failed_jobs.stub
│   │   │           │   │   │   └── jobs.stub
│   │   │           │   │   ├── TableCommand.php
│   │   │           │   │   └── WorkCommand.php
│   │   │           │   ├── DatabaseQueue.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── JobExceptionOccurred.php
│   │   │           │   │   ├── JobFailed.php
│   │   │           │   │   ├── JobPopped.php
│   │   │           │   │   ├── JobPopping.php
│   │   │           │   │   ├── JobProcessed.php
│   │   │           │   │   ├── JobProcessing.php
│   │   │           │   │   ├── JobQueued.php
│   │   │           │   │   ├── JobQueueing.php
│   │   │           │   │   ├── JobReleasedAfterException.php
│   │   │           │   │   ├── JobRetryRequested.php
│   │   │           │   │   ├── JobTimedOut.php
│   │   │           │   │   ├── Looping.php
│   │   │           │   │   ├── QueueBusy.php
│   │   │           │   │   └── WorkerStopping.php
│   │   │           │   ├── Failed
│   │   │           │   │   ├── CountableFailedJobProvider.php
│   │   │           │   │   ├── DatabaseFailedJobProvider.php
│   │   │           │   │   ├── DatabaseUuidFailedJobProvider.php
│   │   │           │   │   ├── DynamoDbFailedJobProvider.php
│   │   │           │   │   ├── FailedJobProviderInterface.php
│   │   │           │   │   ├── FileFailedJobProvider.php
│   │   │           │   │   ├── NullFailedJobProvider.php
│   │   │           │   │   └── PrunableFailedJobProvider.php
│   │   │           │   ├── InteractsWithQueue.php
│   │   │           │   ├── InvalidPayloadException.php
│   │   │           │   ├── Jobs
│   │   │           │   │   ├── BeanstalkdJob.php
│   │   │           │   │   ├── DatabaseJob.php
│   │   │           │   │   ├── DatabaseJobRecord.php
│   │   │           │   │   ├── JobName.php
│   │   │           │   │   ├── Job.php
│   │   │           │   │   ├── RedisJob.php
│   │   │           │   │   ├── SqsJob.php
│   │   │           │   │   └── SyncJob.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── ListenerOptions.php
│   │   │           │   ├── Listener.php
│   │   │           │   ├── LuaScripts.php
│   │   │           │   ├── ManuallyFailedException.php
│   │   │           │   ├── MaxAttemptsExceededException.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── RateLimited.php
│   │   │           │   │   ├── RateLimitedWithRedis.php
│   │   │           │   │   ├── SkipIfBatchCancelled.php
│   │   │           │   │   ├── ThrottlesExceptions.php
│   │   │           │   │   ├── ThrottlesExceptionsWithRedis.php
│   │   │           │   │   └── WithoutOverlapping.php
│   │   │           │   ├── NullQueue.php
│   │   │           │   ├── QueueManager.php
│   │   │           │   ├── Queue.php
│   │   │           │   ├── QueueServiceProvider.php
│   │   │           │   ├── README.md
│   │   │           │   ├── RedisQueue.php
│   │   │           │   ├── SerializesAndRestoresModelIdentifiers.php
│   │   │           │   ├── SerializesModels.php
│   │   │           │   ├── SqsQueue.php
│   │   │           │   ├── SyncQueue.php
│   │   │           │   ├── TimeoutExceededException.php
│   │   │           │   ├── WorkerOptions.php
│   │   │           │   └── Worker.php
│   │   │           ├── Redis
│   │   │           │   ├── composer.json
│   │   │           │   ├── Connections
│   │   │           │   │   ├── Connection.php
│   │   │           │   │   ├── PacksPhpRedisValues.php
│   │   │           │   │   ├── PhpRedisClusterConnection.php
│   │   │           │   │   ├── PhpRedisConnection.php
│   │   │           │   │   ├── PredisClusterConnection.php
│   │   │           │   │   └── PredisConnection.php
│   │   │           │   ├── Connectors
│   │   │           │   │   ├── PhpRedisConnector.php
│   │   │           │   │   └── PredisConnector.php
│   │   │           │   ├── Events
│   │   │           │   │   └── CommandExecuted.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Limiters
│   │   │           │   │   ├── ConcurrencyLimiterBuilder.php
│   │   │           │   │   ├── ConcurrencyLimiter.php
│   │   │           │   │   ├── DurationLimiterBuilder.php
│   │   │           │   │   └── DurationLimiter.php
│   │   │           │   ├── RedisManager.php
│   │   │           │   └── RedisServiceProvider.php
│   │   │           ├── Routing
│   │   │           │   ├── AbstractRouteCollection.php
│   │   │           │   ├── CallableDispatcher.php
│   │   │           │   ├── CompiledRouteCollection.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── ControllerMakeCommand.php
│   │   │           │   │   ├── MiddlewareMakeCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       ├── controller.api.stub
│   │   │           │   │       ├── controller.invokable.stub
│   │   │           │   │       ├── controller.model.api.stub
│   │   │           │   │       ├── controller.model.stub
│   │   │           │   │       ├── controller.nested.api.stub
│   │   │           │   │       ├── controller.nested.singleton.api.stub
│   │   │           │   │       ├── controller.nested.singleton.stub
│   │   │           │   │       ├── controller.nested.stub
│   │   │           │   │       ├── controller.plain.stub
│   │   │           │   │       ├── controller.singleton.api.stub
│   │   │           │   │       ├── controller.singleton.stub
│   │   │           │   │       ├── controller.stub
│   │   │           │   │       └── middleware.stub
│   │   │           │   ├── Contracts
│   │   │           │   │   ├── CallableDispatcher.php
│   │   │           │   │   └── ControllerDispatcher.php
│   │   │           │   ├── ControllerDispatcher.php
│   │   │           │   ├── ControllerMiddlewareOptions.php
│   │   │           │   ├── Controller.php
│   │   │           │   ├── Controllers
│   │   │           │   │   ├── HasMiddleware.php
│   │   │           │   │   └── Middleware.php
│   │   │           │   ├── CreatesRegularExpressionRouteConstraints.php
│   │   │           │   ├── Events
│   │   │           │   │   ├── PreparingResponse.php
│   │   │           │   │   ├── ResponsePrepared.php
│   │   │           │   │   ├── RouteMatched.php
│   │   │           │   │   └── Routing.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   ├── BackedEnumCaseNotFoundException.php
│   │   │           │   │   ├── InvalidSignatureException.php
│   │   │           │   │   ├── StreamedResponseException.php
│   │   │           │   │   └── UrlGenerationException.php
│   │   │           │   ├── FiltersControllerMiddleware.php
│   │   │           │   ├── ImplicitRouteBinding.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Matching
│   │   │           │   │   ├── HostValidator.php
│   │   │           │   │   ├── MethodValidator.php
│   │   │           │   │   ├── SchemeValidator.php
│   │   │           │   │   ├── UriValidator.php
│   │   │           │   │   └── ValidatorInterface.php
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── SubstituteBindings.php
│   │   │           │   │   ├── ThrottleRequests.php
│   │   │           │   │   ├── ThrottleRequestsWithRedis.php
│   │   │           │   │   └── ValidateSignature.php
│   │   │           │   ├── MiddlewareNameResolver.php
│   │   │           │   ├── PendingResourceRegistration.php
│   │   │           │   ├── PendingSingletonResourceRegistration.php
│   │   │           │   ├── Pipeline.php
│   │   │           │   ├── RedirectController.php
│   │   │           │   ├── Redirector.php
│   │   │           │   ├── ResolvesRouteDependencies.php
│   │   │           │   ├── ResourceRegistrar.php
│   │   │           │   ├── ResponseFactory.php
│   │   │           │   ├── RouteAction.php
│   │   │           │   ├── RouteBinding.php
│   │   │           │   ├── RouteCollectionInterface.php
│   │   │           │   ├── RouteCollection.php
│   │   │           │   ├── RouteDependencyResolverTrait.php
│   │   │           │   ├── RouteFileRegistrar.php
│   │   │           │   ├── RouteGroup.php
│   │   │           │   ├── RouteParameterBinder.php
│   │   │           │   ├── Route.php
│   │   │           │   ├── RouteRegistrar.php
│   │   │           │   ├── Router.php
│   │   │           │   ├── RouteSignatureParameters.php
│   │   │           │   ├── RouteUri.php
│   │   │           │   ├── RouteUrlGenerator.php
│   │   │           │   ├── RoutingServiceProvider.php
│   │   │           │   ├── SortedMiddleware.php
│   │   │           │   ├── UrlGenerator.php
│   │   │           │   └── ViewController.php
│   │   │           ├── Session
│   │   │           │   ├── ArraySessionHandler.php
│   │   │           │   ├── CacheBasedSessionHandler.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Console
│   │   │           │   │   ├── SessionTableCommand.php
│   │   │           │   │   └── stubs
│   │   │           │   │       └── database.stub
│   │   │           │   ├── CookieSessionHandler.php
│   │   │           │   ├── DatabaseSessionHandler.php
│   │   │           │   ├── EncryptedStore.php
│   │   │           │   ├── ExistenceAwareInterface.php
│   │   │           │   ├── FileSessionHandler.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Middleware
│   │   │           │   │   ├── AuthenticateSession.php
│   │   │           │   │   └── StartSession.php
│   │   │           │   ├── NullSessionHandler.php
│   │   │           │   ├── SessionManager.php
│   │   │           │   ├── SessionServiceProvider.php
│   │   │           │   ├── Store.php
│   │   │           │   ├── SymfonySessionDecorator.php
│   │   │           │   └── TokenMismatchException.php
│   │   │           ├── Support
│   │   │           │   ├── AggregateServiceProvider.php
│   │   │           │   ├── Benchmark.php
│   │   │           │   ├── Carbon.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Composer.php
│   │   │           │   ├── ConfigurationUrlParser.php
│   │   │           │   ├── DateFactory.php
│   │   │           │   ├── DefaultProviders.php
│   │   │           │   ├── Env.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   └── MathException.php
│   │   │           │   ├── Facades
│   │   │           │   │   ├── App.php
│   │   │           │   │   ├── Artisan.php
│   │   │           │   │   ├── Auth.php
│   │   │           │   │   ├── Blade.php
│   │   │           │   │   ├── Broadcast.php
│   │   │           │   │   ├── Bus.php
│   │   │           │   │   ├── Cache.php
│   │   │           │   │   ├── Config.php
│   │   │           │   │   ├── Cookie.php
│   │   │           │   │   ├── Crypt.php
│   │   │           │   │   ├── Date.php
│   │   │           │   │   ├── DB.php
│   │   │           │   │   ├── Event.php
│   │   │           │   │   ├── Facade.php
│   │   │           │   │   ├── File.php
│   │   │           │   │   ├── Gate.php
│   │   │           │   │   ├── Hash.php
│   │   │           │   │   ├── Http.php
│   │   │           │   │   ├── Lang.php
│   │   │           │   │   ├── Log.php
│   │   │           │   │   ├── Mail.php
│   │   │           │   │   ├── Notification.php
│   │   │           │   │   ├── ParallelTesting.php
│   │   │           │   │   ├── Password.php
│   │   │           │   │   ├── Pipeline.php
│   │   │           │   │   ├── Process.php
│   │   │           │   │   ├── Queue.php
│   │   │           │   │   ├── RateLimiter.php
│   │   │           │   │   ├── Redirect.php
│   │   │           │   │   ├── Redis.php
│   │   │           │   │   ├── Request.php
│   │   │           │   │   ├── Response.php
│   │   │           │   │   ├── Route.php
│   │   │           │   │   ├── Schema.php
│   │   │           │   │   ├── Session.php
│   │   │           │   │   ├── Storage.php
│   │   │           │   │   ├── URL.php
│   │   │           │   │   ├── Validator.php
│   │   │           │   │   ├── View.php
│   │   │           │   │   └── Vite.php
│   │   │           │   ├── Fluent.php
│   │   │           │   ├── helpers.php
│   │   │           │   ├── HigherOrderTapProxy.php
│   │   │           │   ├── HtmlString.php
│   │   │           │   ├── InteractsWithTime.php
│   │   │           │   ├── Js.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── Lottery.php
│   │   │           │   ├── Manager.php
│   │   │           │   ├── MessageBag.php
│   │   │           │   ├── MultipleInstanceManager.php
│   │   │           │   ├── NamespacedItemResolver.php
│   │   │           │   ├── Number.php
│   │   │           │   ├── Optional.php
│   │   │           │   ├── Pluralizer.php
│   │   │           │   ├── ProcessUtils.php
│   │   │           │   ├── Reflector.php
│   │   │           │   ├── ServiceProvider.php
│   │   │           │   ├── Sleep.php
│   │   │           │   ├── Stringable.php
│   │   │           │   ├── Str.php
│   │   │           │   ├── Testing
│   │   │           │   │   └── Fakes
│   │   │           │   │       ├── BatchFake.php
│   │   │           │   │       ├── BatchRepositoryFake.php
│   │   │           │   │       ├── BusFake.php
│   │   │           │   │       ├── ChainedBatchTruthTest.php
│   │   │           │   │       ├── EventFake.php
│   │   │           │   │       ├── Fake.php
│   │   │           │   │       ├── MailFake.php
│   │   │           │   │       ├── NotificationFake.php
│   │   │           │   │       ├── PendingBatchFake.php
│   │   │           │   │       ├── PendingChainFake.php
│   │   │           │   │       ├── PendingMailFake.php
│   │   │           │   │       └── QueueFake.php
│   │   │           │   ├── Timebox.php
│   │   │           │   ├── Traits
│   │   │           │   │   ├── CapsuleManagerTrait.php
│   │   │           │   │   ├── ForwardsCalls.php
│   │   │           │   │   ├── Localizable.php
│   │   │           │   │   ├── ReflectsClosures.php
│   │   │           │   │   └── Tappable.php
│   │   │           │   ├── ValidatedInput.php
│   │   │           │   └── ViewErrorBag.php
│   │   │           ├── Testing
│   │   │           │   ├── AssertableJsonString.php
│   │   │           │   ├── Assert.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── AssertsStatusCodes.php
│   │   │           │   │   ├── RunsInParallel.php
│   │   │           │   │   └── TestDatabases.php
│   │   │           │   ├── Constraints
│   │   │           │   │   ├── ArraySubset.php
│   │   │           │   │   ├── CountInDatabase.php
│   │   │           │   │   ├── HasInDatabase.php
│   │   │           │   │   ├── NotSoftDeletedInDatabase.php
│   │   │           │   │   ├── SeeInOrder.php
│   │   │           │   │   └── SoftDeletedInDatabase.php
│   │   │           │   ├── Exceptions
│   │   │           │   │   └── InvalidArgumentException.php
│   │   │           │   ├── Fluent
│   │   │           │   │   ├── AssertableJson.php
│   │   │           │   │   └── Concerns
│   │   │           │   │       ├── Debugging.php
│   │   │           │   │       ├── Has.php
│   │   │           │   │       ├── Interaction.php
│   │   │           │   │       └── Matching.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── LoggedExceptionCollection.php
│   │   │           │   ├── ParallelConsoleOutput.php
│   │   │           │   ├── ParallelRunner.php
│   │   │           │   ├── ParallelTesting.php
│   │   │           │   ├── ParallelTestingServiceProvider.php
│   │   │           │   ├── PendingCommand.php
│   │   │           │   ├── TestComponent.php
│   │   │           │   ├── TestResponse.php
│   │   │           │   └── TestView.php
│   │   │           ├── Translation
│   │   │           │   ├── ArrayLoader.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── CreatesPotentiallyTranslatedStrings.php
│   │   │           │   ├── FileLoader.php
│   │   │           │   ├── lang
│   │   │           │   │   └── en
│   │   │           │   │       ├── auth.php
│   │   │           │   │       ├── pagination.php
│   │   │           │   │       ├── passwords.php
│   │   │           │   │       └── validation.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── MessageSelector.php
│   │   │           │   ├── PotentiallyTranslatedString.php
│   │   │           │   ├── TranslationServiceProvider.php
│   │   │           │   └── Translator.php
│   │   │           ├── Validation
│   │   │           │   ├── ClosureValidationRule.php
│   │   │           │   ├── composer.json
│   │   │           │   ├── Concerns
│   │   │           │   │   ├── FilterEmailValidation.php
│   │   │           │   │   ├── FormatsMessages.php
│   │   │           │   │   ├── ReplacesAttributes.php
│   │   │           │   │   └── ValidatesAttributes.php
│   │   │           │   ├── ConditionalRules.php
│   │   │           │   ├── DatabasePresenceVerifierInterface.php
│   │   │           │   ├── DatabasePresenceVerifier.php
│   │   │           │   ├── Factory.php
│   │   │           │   ├── InvokableValidationRule.php
│   │   │           │   ├── LICENSE.md
│   │   │           │   ├── NestedRules.php
│   │   │           │   ├── NotPwnedVerifier.php
│   │   │           │   ├── PresenceVerifierInterface.php
│   │   │           │   ├── Rule.php
│   │   │           │   ├── Rules
│   │   │           │   │   ├── Can.php
│   │   │           │   │   ├── DatabaseRule.php
│   │   │           │   │   ├── Dimensions.php
│   │   │           │   │   ├── Enum.php
│   │   │           │   │   ├── ExcludeIf.php
│   │   │           │   │   ├── Exists.php
│   │   │           │   │   ├── File.php
│   │   │           │   │   ├── ImageFile.php
│   │   │           │   │   ├── In.php
│   │   │           │   │   ├── NotIn.php
│   │   │           │   │   ├── Password.php
│   │   │           │   │   ├── ProhibitedIf.php
│   │   │           │   │   ├── RequiredIf.php
│   │   │           │   │   └── Unique.php
│   │   │           │   ├── UnauthorizedException.php
│   │   │           │   ├── ValidatesWhenResolvedTrait.php
│   │   │           │   ├── ValidationData.php
│   │   │           │   ├── ValidationException.php
│   │   │           │   ├── ValidationRuleParser.php
│   │   │           │   ├── ValidationServiceProvider.php
│   │   │           │   └── Validator.php
│   │   │           └── View
│   │   │               ├── AnonymousComponent.php
│   │   │               ├── AppendableAttributeValue.php
│   │   │               ├── Compilers
│   │   │               │   ├── BladeCompiler.php
│   │   │               │   ├── CompilerInterface.php
│   │   │               │   ├── Compiler.php
│   │   │               │   ├── ComponentTagCompiler.php
│   │   │               │   └── Concerns
│   │   │               │       ├── CompilesAuthorizations.php
│   │   │               │       ├── CompilesClasses.php
│   │   │               │       ├── CompilesComments.php
│   │   │               │       ├── CompilesComponents.php
│   │   │               │       ├── CompilesConditionals.php
│   │   │               │       ├── CompilesEchos.php
│   │   │               │       ├── CompilesErrors.php
│   │   │               │       ├── CompilesFragments.php
│   │   │               │       ├── CompilesHelpers.php
│   │   │               │       ├── CompilesIncludes.php
│   │   │               │       ├── CompilesInjections.php
│   │   │               │       ├── CompilesJson.php
│   │   │               │       ├── CompilesJs.php
│   │   │               │       ├── CompilesLayouts.php
│   │   │               │       ├── CompilesLoops.php
│   │   │               │       ├── CompilesRawPhp.php
│   │   │               │       ├── CompilesSessions.php
│   │   │               │       ├── CompilesStacks.php
│   │   │               │       ├── CompilesStyles.php
│   │   │               │       ├── CompilesTranslations.php
│   │   │               │       └── CompilesUseStatements.php
│   │   │               ├── ComponentAttributeBag.php
│   │   │               ├── Component.php
│   │   │               ├── ComponentSlot.php
│   │   │               ├── composer.json
│   │   │               ├── Concerns
│   │   │               │   ├── ManagesComponents.php
│   │   │               │   ├── ManagesEvents.php
│   │   │               │   ├── ManagesFragments.php
│   │   │               │   ├── ManagesLayouts.php
│   │   │               │   ├── ManagesLoops.php
│   │   │               │   ├── ManagesStacks.php
│   │   │               │   └── ManagesTranslations.php
│   │   │               ├── DynamicComponent.php
│   │   │               ├── Engines
│   │   │               │   ├── CompilerEngine.php
│   │   │               │   ├── Engine.php
│   │   │               │   ├── EngineResolver.php
│   │   │               │   ├── FileEngine.php
│   │   │               │   └── PhpEngine.php
│   │   │               ├── Factory.php
│   │   │               ├── FileViewFinder.php
│   │   │               ├── InvokableComponentVariable.php
│   │   │               ├── LICENSE.md
│   │   │               ├── Middleware
│   │   │               │   └── ShareErrorsFromSession.php
│   │   │               ├── ViewException.php
│   │   │               ├── ViewFinderInterface.php
│   │   │               ├── ViewName.php
│   │   │               ├── View.php
│   │   │               └── ViewServiceProvider.php
│   │   ├── pint
│   │   │   ├── builds
│   │   │   │   └── pint
│   │   │   ├── composer.json
│   │   │   └── LICENSE.md
│   │   ├── prompts
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Concerns
│   │   │       │   ├── Colors.php
│   │   │       │   ├── Cursor.php
│   │   │       │   ├── Erase.php
│   │   │       │   ├── Events.php
│   │   │       │   ├── FakesInputOutput.php
│   │   │       │   ├── Fallback.php
│   │   │       │   ├── Interactivity.php
│   │   │       │   ├── Scrolling.php
│   │   │       │   ├── Termwind.php
│   │   │       │   ├── Themes.php
│   │   │       │   ├── Truncation.php
│   │   │       │   └── TypedValue.php
│   │   │       ├── ConfirmPrompt.php
│   │   │       ├── Exceptions
│   │   │       │   ├── FormRevertedException.php
│   │   │       │   └── NonInteractiveValidationException.php
│   │   │       ├── FormBuilder.php
│   │   │       ├── FormStep.php
│   │   │       ├── helpers.php
│   │   │       ├── Key.php
│   │   │       ├── MultiSearchPrompt.php
│   │   │       ├── MultiSelectPrompt.php
│   │   │       ├── Note.php
│   │   │       ├── Output
│   │   │       │   ├── BufferedConsoleOutput.php
│   │   │       │   └── ConsoleOutput.php
│   │   │       ├── PasswordPrompt.php
│   │   │       ├── PausePrompt.php
│   │   │       ├── Progress.php
│   │   │       ├── Prompt.php
│   │   │       ├── SearchPrompt.php
│   │   │       ├── SelectPrompt.php
│   │   │       ├── Spinner.php
│   │   │       ├── SuggestPrompt.php
│   │   │       ├── Table.php
│   │   │       ├── Terminal.php
│   │   │       ├── TextareaPrompt.php
│   │   │       ├── TextPrompt.php
│   │   │       └── Themes
│   │   │           ├── Contracts
│   │   │           │   └── Scrolling.php
│   │   │           └── Default
│   │   │               ├── Concerns
│   │   │               │   ├── DrawsBoxes.php
│   │   │               │   ├── DrawsScrollbars.php
│   │   │               │   └── InteractsWithStrings.php
│   │   │               ├── ConfirmPromptRenderer.php
│   │   │               ├── MultiSearchPromptRenderer.php
│   │   │               ├── MultiSelectPromptRenderer.php
│   │   │               ├── NoteRenderer.php
│   │   │               ├── PasswordPromptRenderer.php
│   │   │               ├── PausePromptRenderer.php
│   │   │               ├── ProgressRenderer.php
│   │   │               ├── Renderer.php
│   │   │               ├── SearchPromptRenderer.php
│   │   │               ├── SelectPromptRenderer.php
│   │   │               ├── SpinnerRenderer.php
│   │   │               ├── SuggestPromptRenderer.php
│   │   │               ├── TableRenderer.php
│   │   │               ├── TextareaPromptRenderer.php
│   │   │               └── TextPromptRenderer.php
│   │   ├── sail
│   │   │   ├── bin
│   │   │   │   └── sail
│   │   │   ├── composer.json
│   │   │   ├── database
│   │   │   │   ├── mariadb
│   │   │   │   │   └── create-testing-database.sh
│   │   │   │   ├── mysql
│   │   │   │   │   └── create-testing-database.sh
│   │   │   │   └── pgsql
│   │   │   │       └── create-testing-database.sql
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   ├── runtimes
│   │   │   │   ├── 8.0
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.1
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.2
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   ├── 8.3
│   │   │   │   │   ├── Dockerfile
│   │   │   │   │   ├── php.ini
│   │   │   │   │   ├── start-container
│   │   │   │   │   └── supervisord.conf
│   │   │   │   └── 8.4
│   │   │   │       ├── Dockerfile
│   │   │   │       ├── php.ini
│   │   │   │       ├── start-container
│   │   │   │       └── supervisord.conf
│   │   │   ├── src
│   │   │   │   ├── Console
│   │   │   │   │   ├── AddCommand.php
│   │   │   │   │   ├── Concerns
│   │   │   │   │   │   └── InteractsWithDockerComposeServices.php
│   │   │   │   │   ├── InstallCommand.php
│   │   │   │   │   └── PublishCommand.php
│   │   │   │   └── SailServiceProvider.php
│   │   │   └── stubs
│   │   │       ├── devcontainer.stub
│   │   │       ├── docker-compose.stub
│   │   │       ├── mailpit.stub
│   │   │       ├── mariadb.stub
│   │   │       ├── meilisearch.stub
│   │   │       ├── memcached.stub
│   │   │       ├── minio.stub
│   │   │       ├── mysql.stub
│   │   │       ├── pgsql.stub
│   │   │       ├── redis.stub
│   │   │       ├── selenium.stub
│   │   │       ├── soketi.stub
│   │   │       └── typesense.stub
│   │   ├── sanctum
│   │   │   ├── composer.json
│   │   │   ├── config
│   │   │   │   └── sanctum.php
│   │   │   ├── database
│   │   │   │   └── migrations
│   │   │   │       └── 2019_12_14_000001_create_personal_access_tokens_table.php
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── Console
│   │   │   │   │   └── Commands
│   │   │   │   │       └── PruneExpired.php
│   │   │   │   ├── Contracts
│   │   │   │   │   ├── HasAbilities.php
│   │   │   │   │   └── HasApiTokens.php
│   │   │   │   ├── Events
│   │   │   │   │   └── TokenAuthenticated.php
│   │   │   │   ├── Exceptions
│   │   │   │   │   ├── MissingAbilityException.php
│   │   │   │   │   └── MissingScopeException.php
│   │   │   │   ├── Guard.php
│   │   │   │   ├── HasApiTokens.php
│   │   │   │   ├── Http
│   │   │   │   │   ├── Controllers
│   │   │   │   │   │   └── CsrfCookieController.php
│   │   │   │   │   └── Middleware
│   │   │   │   │       ├── AuthenticateSession.php
│   │   │   │   │       ├── CheckAbilities.php
│   │   │   │   │       ├── CheckForAnyAbility.php
│   │   │   │   │       ├── CheckForAnyScope.php
│   │   │   │   │       ├── CheckScopes.php
│   │   │   │   │       └── EnsureFrontendRequestsAreStateful.php
│   │   │   │   ├── NewAccessToken.php
│   │   │   │   ├── PersonalAccessToken.php
│   │   │   │   ├── Sanctum.php
│   │   │   │   ├── SanctumServiceProvider.php
│   │   │   │   └── TransientToken.php
│   │   │   ├── testbench.yaml
│   │   │   └── UPGRADE.md
│   │   ├── serializable-closure
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Contracts
│   │   │       │   ├── Serializable.php
│   │   │       │   └── Signer.php
│   │   │       ├── Exceptions
│   │   │       │   ├── InvalidSignatureException.php
│   │   │       │   ├── MissingSecretKeyException.php
│   │   │       │   └── PhpVersionNotSupportedException.php
│   │   │       ├── SerializableClosure.php
│   │   │       ├── Serializers
│   │   │       │   ├── Native.php
│   │   │       │   └── Signed.php
│   │   │       ├── Signers
│   │   │       │   └── Hmac.php
│   │   │       ├── Support
│   │   │       │   ├── ClosureScope.php
│   │   │       │   ├── ClosureStream.php
│   │   │       │   ├── ReflectionClosure.php
│   │   │       │   └── SelfReference.php
│   │   │       └── UnsignedSerializableClosure.php
│   │   ├── tinker
│   │   │   ├── composer.json
│   │   │   ├── config
│   │   │   │   └── tinker.php
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ClassAliasAutoloader.php
│   │   │       ├── Console
│   │   │       │   └── TinkerCommand.php
│   │   │       ├── TinkerCaster.php
│   │   │       └── TinkerServiceProvider.php
│   │   └── ui
│   │       ├── auth-backend
│   │       │   ├── AuthenticatesUsers.php
│   │       │   ├── ConfirmsPasswords.php
│   │       │   ├── RedirectsUsers.php
│   │       │   ├── RegistersUsers.php
│   │       │   ├── ResetsPasswords.php
│   │       │   ├── SendsPasswordResetEmails.php
│   │       │   ├── ThrottlesLogins.php
│   │       │   └── VerifiesEmails.php
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       ├── src
│   │       │   ├── Auth
│   │       │   │   ├── bootstrap-stubs
│   │       │   │   │   ├── auth
│   │       │   │   │   │   ├── login.stub
│   │       │   │   │   │   ├── passwords
│   │       │   │   │   │   │   ├── confirm.stub
│   │       │   │   │   │   │   ├── email.stub
│   │       │   │   │   │   │   └── reset.stub
│   │       │   │   │   │   ├── register.stub
│   │       │   │   │   │   └── verify.stub
│   │       │   │   │   ├── home.stub
│   │       │   │   │   └── layouts
│   │       │   │   │       └── app.stub
│   │       │   │   └── stubs
│   │       │   │       ├── controllers
│   │       │   │       │   ├── Controller.stub
│   │       │   │       │   └── HomeController.stub
│   │       │   │       └── routes.stub
│   │       │   ├── AuthCommand.php
│   │       │   ├── AuthRouteMethods.php
│   │       │   ├── ControllersCommand.php
│   │       │   ├── Presets
│   │       │   │   ├── Bootstrap.php
│   │       │   │   ├── bootstrap-stubs
│   │       │   │   │   ├── app.scss
│   │       │   │   │   ├── bootstrap.js
│   │       │   │   │   ├── _variables.scss
│   │       │   │   │   └── vite.config.js
│   │       │   │   ├── Preset.php
│   │       │   │   ├── React.php
│   │       │   │   ├── react-stubs
│   │       │   │   │   ├── app.js
│   │       │   │   │   ├── Example.jsx
│   │       │   │   │   └── vite.config.js
│   │       │   │   ├── Vue.php
│   │       │   │   └── vue-stubs
│   │       │   │       ├── app.js
│   │       │   │       ├── ExampleComponent.vue
│   │       │   │       └── vite.config.js
│   │       │   ├── UiCommand.php
│   │       │   └── UiServiceProvider.php
│   │       ├── stubs
│   │       │   ├── Auth
│   │       │   │   ├── ConfirmPasswordController.stub
│   │       │   │   ├── ForgotPasswordController.stub
│   │       │   │   ├── LoginController.stub
│   │       │   │   ├── RegisterController.stub
│   │       │   │   ├── ResetPasswordController.stub
│   │       │   │   └── VerificationController.stub
│   │       │   └── migrations
│   │       │       └── 2014_10_12_100000_create_password_resets_table.php
│   │       └── tests
│   │           └── AuthBackend
│   │               ├── AuthenticatesUsersTest.php
│   │               ├── RegistersUsersTest.php
│   │               └── ThrottleLoginsTest.php
│   ├── league
│   │   ├── commonmark
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── CommonMarkConverter.php
│   │   │       ├── ConverterInterface.php
│   │   │       ├── Delimiter
│   │   │       │   ├── DelimiterInterface.php
│   │   │       │   ├── DelimiterParser.php
│   │   │       │   ├── Delimiter.php
│   │   │       │   ├── DelimiterStack.php
│   │   │       │   └── Processor
│   │   │       │       ├── DelimiterProcessorCollectionInterface.php
│   │   │       │       ├── DelimiterProcessorCollection.php
│   │   │       │       ├── DelimiterProcessorInterface.php
│   │   │       │       └── StaggeredDelimiterProcessor.php
│   │   │       ├── Environment
│   │   │       │   ├── EnvironmentAwareInterface.php
│   │   │       │   ├── EnvironmentBuilderInterface.php
│   │   │       │   ├── EnvironmentInterface.php
│   │   │       │   └── Environment.php
│   │   │       ├── Event
│   │   │       │   ├── AbstractEvent.php
│   │   │       │   ├── DocumentParsedEvent.php
│   │   │       │   ├── DocumentPreParsedEvent.php
│   │   │       │   ├── DocumentPreRenderEvent.php
│   │   │       │   ├── DocumentRenderedEvent.php
│   │   │       │   └── ListenerData.php
│   │   │       ├── Exception
│   │   │       │   ├── AlreadyInitializedException.php
│   │   │       │   ├── CommonMarkException.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   ├── IOException.php
│   │   │       │   ├── LogicException.php
│   │   │       │   ├── MissingDependencyException.php
│   │   │       │   └── UnexpectedEncodingException.php
│   │   │       ├── Extension
│   │   │       │   ├── Attributes
│   │   │       │   │   ├── AttributesExtension.php
│   │   │       │   │   ├── Event
│   │   │       │   │   │   └── AttributesListener.php
│   │   │       │   │   ├── Node
│   │   │       │   │   │   ├── AttributesInline.php
│   │   │       │   │   │   └── Attributes.php
│   │   │       │   │   ├── Parser
│   │   │       │   │   │   ├── AttributesBlockContinueParser.php
│   │   │       │   │   │   ├── AttributesBlockStartParser.php
│   │   │       │   │   │   └── AttributesInlineParser.php
│   │   │       │   │   └── Util
│   │   │       │   │       └── AttributesHelper.php
│   │   │       │   ├── Autolink
│   │   │       │   │   ├── AutolinkExtension.php
│   │   │       │   │   ├── EmailAutolinkParser.php
│   │   │       │   │   └── UrlAutolinkParser.php
│   │   │       │   ├── CommonMark
│   │   │       │   │   ├── CommonMarkCoreExtension.php
│   │   │       │   │   ├── Delimiter
│   │   │       │   │   │   └── Processor
│   │   │       │   │   │       └── EmphasisDelimiterProcessor.php
│   │   │       │   │   ├── Node
│   │   │       │   │   │   ├── Block
│   │   │       │   │   │   │   ├── BlockQuote.php
│   │   │       │   │   │   │   ├── FencedCode.php
│   │   │       │   │   │   │   ├── Heading.php
│   │   │       │   │   │   │   ├── HtmlBlock.php
│   │   │       │   │   │   │   ├── IndentedCode.php
│   │   │       │   │   │   │   ├── ListBlock.php
│   │   │       │   │   │   │   ├── ListData.php
│   │   │       │   │   │   │   ├── ListItem.php
│   │   │       │   │   │   │   └── ThematicBreak.php
│   │   │       │   │   │   └── Inline
│   │   │       │   │   │       ├── AbstractWebResource.php
│   │   │       │   │   │       ├── Code.php
│   │   │       │   │   │       ├── Emphasis.php
│   │   │       │   │   │       ├── HtmlInline.php
│   │   │       │   │   │       ├── Image.php
│   │   │       │   │   │       ├── Link.php
│   │   │       │   │   │       └── Strong.php
│   │   │       │   │   ├── Parser
│   │   │       │   │   │   ├── Block
│   │   │       │   │   │   │   ├── BlockQuoteParser.php
│   │   │       │   │   │   │   ├── BlockQuoteStartParser.php
│   │   │       │   │   │   │   ├── FencedCodeParser.php
│   │   │       │   │   │   │   ├── FencedCodeStartParser.php
│   │   │       │   │   │   │   ├── HeadingParser.php
│   │   │       │   │   │   │   ├── HeadingStartParser.php
│   │   │       │   │   │   │   ├── HtmlBlockParser.php
│   │   │       │   │   │   │   ├── HtmlBlockStartParser.php
│   │   │       │   │   │   │   ├── IndentedCodeParser.php
│   │   │       │   │   │   │   ├── IndentedCodeStartParser.php
│   │   │       │   │   │   │   ├── ListBlockParser.php
│   │   │       │   │   │   │   ├── ListBlockStartParser.php
│   │   │       │   │   │   │   ├── ListItemParser.php
│   │   │       │   │   │   │   ├── ThematicBreakParser.php
│   │   │       │   │   │   │   └── ThematicBreakStartParser.php
│   │   │       │   │   │   └── Inline
│   │   │       │   │   │       ├── AutolinkParser.php
│   │   │       │   │   │       ├── BacktickParser.php
│   │   │       │   │   │       ├── BangParser.php
│   │   │       │   │   │       ├── CloseBracketParser.php
│   │   │       │   │   │       ├── EntityParser.php
│   │   │       │   │   │       ├── EscapableParser.php
│   │   │       │   │   │       ├── HtmlInlineParser.php
│   │   │       │   │   │       └── OpenBracketParser.php
│   │   │       │   │   └── Renderer
│   │   │       │   │       ├── Block
│   │   │       │   │       │   ├── BlockQuoteRenderer.php
│   │   │       │   │       │   ├── FencedCodeRenderer.php
│   │   │       │   │       │   ├── HeadingRenderer.php
│   │   │       │   │       │   ├── HtmlBlockRenderer.php
│   │   │       │   │       │   ├── IndentedCodeRenderer.php
│   │   │       │   │       │   ├── ListBlockRenderer.php
│   │   │       │   │       │   ├── ListItemRenderer.php
│   │   │       │   │       │   └── ThematicBreakRenderer.php
│   │   │       │   │       └── Inline
│   │   │       │   │           ├── CodeRenderer.php
│   │   │       │   │           ├── EmphasisRenderer.php
│   │   │       │   │           ├── HtmlInlineRenderer.php
│   │   │       │   │           ├── ImageRenderer.php
│   │   │       │   │           ├── LinkRenderer.php
│   │   │       │   │           └── StrongRenderer.php
│   │   │       │   ├── ConfigurableExtensionInterface.php
│   │   │       │   ├── DefaultAttributes
│   │   │       │   │   ├── ApplyDefaultAttributesProcessor.php
│   │   │       │   │   └── DefaultAttributesExtension.php
│   │   │       │   ├── DescriptionList
│   │   │       │   │   ├── DescriptionListExtension.php
│   │   │       │   │   ├── Event
│   │   │       │   │   │   ├── ConsecutiveDescriptionListMerger.php
│   │   │       │   │   │   └── LooseDescriptionHandler.php
│   │   │       │   │   ├── Node
│   │   │       │   │   │   ├── DescriptionList.php
│   │   │       │   │   │   ├── Description.php
│   │   │       │   │   │   └── DescriptionTerm.php
│   │   │       │   │   ├── Parser
│   │   │       │   │   │   ├── DescriptionContinueParser.php
│   │   │       │   │   │   ├── DescriptionListContinueParser.php
│   │   │       │   │   │   ├── DescriptionStartParser.php
│   │   │       │   │   │   └── DescriptionTermContinueParser.php
│   │   │       │   │   └── Renderer
│   │   │       │   │       ├── DescriptionListRenderer.php
│   │   │       │   │       ├── DescriptionRenderer.php
│   │   │       │   │       └── DescriptionTermRenderer.php
│   │   │       │   ├── DisallowedRawHtml
│   │   │       │   │   ├── DisallowedRawHtmlExtension.php
│   │   │       │   │   └── DisallowedRawHtmlRenderer.php
│   │   │       │   ├── Embed
│   │   │       │   │   ├── Bridge
│   │   │       │   │   │   └── OscaroteroEmbedAdapter.php
│   │   │       │   │   ├── DomainFilteringAdapter.php
│   │   │       │   │   ├── EmbedAdapterInterface.php
│   │   │       │   │   ├── EmbedExtension.php
│   │   │       │   │   ├── EmbedParser.php
│   │   │       │   │   ├── Embed.php
│   │   │       │   │   ├── EmbedProcessor.php
│   │   │       │   │   ├── EmbedRenderer.php
│   │   │       │   │   └── EmbedStartParser.php
│   │   │       │   ├── ExtensionInterface.php
│   │   │       │   ├── ExternalLink
│   │   │       │   │   ├── ExternalLinkExtension.php
│   │   │       │   │   └── ExternalLinkProcessor.php
│   │   │       │   ├── Footnote
│   │   │       │   │   ├── Event
│   │   │       │   │   │   ├── AnonymousFootnotesListener.php
│   │   │       │   │   │   ├── FixOrphanedFootnotesAndRefsListener.php
│   │   │       │   │   │   ├── GatherFootnotesListener.php
│   │   │       │   │   │   └── NumberFootnotesListener.php
│   │   │       │   │   ├── FootnoteExtension.php
│   │   │       │   │   ├── Node
│   │   │       │   │   │   ├── FootnoteBackref.php
│   │   │       │   │   │   ├── FootnoteContainer.php
│   │   │       │   │   │   ├── Footnote.php
│   │   │       │   │   │   └── FootnoteRef.php
│   │   │       │   │   ├── Parser
│   │   │       │   │   │   ├── AnonymousFootnoteRefParser.php
│   │   │       │   │   │   ├── FootnoteParser.php
│   │   │       │   │   │   ├── FootnoteRefParser.php
│   │   │       │   │   │   └── FootnoteStartParser.php
│   │   │       │   │   └── Renderer
│   │   │       │   │       ├── FootnoteBackrefRenderer.php
│   │   │       │   │       ├── FootnoteContainerRenderer.php
│   │   │       │   │       ├── FootnoteRefRenderer.php
│   │   │       │   │       └── FootnoteRenderer.php
│   │   │       │   ├── FrontMatter
│   │   │       │   │   ├── Data
│   │   │       │   │   │   ├── FrontMatterDataParserInterface.php
│   │   │       │   │   │   ├── LibYamlFrontMatterParser.php
│   │   │       │   │   │   └── SymfonyYamlFrontMatterParser.php
│   │   │       │   │   ├── Exception
│   │   │       │   │   │   └── InvalidFrontMatterException.php
│   │   │       │   │   ├── FrontMatterExtension.php
│   │   │       │   │   ├── FrontMatterParserInterface.php
│   │   │       │   │   ├── FrontMatterParser.php
│   │   │       │   │   ├── FrontMatterProviderInterface.php
│   │   │       │   │   ├── Input
│   │   │       │   │   │   └── MarkdownInputWithFrontMatter.php
│   │   │       │   │   ├── Listener
│   │   │       │   │   │   ├── FrontMatterPostRenderListener.php
│   │   │       │   │   │   └── FrontMatterPreParser.php
│   │   │       │   │   └── Output
│   │   │       │   │       └── RenderedContentWithFrontMatter.php
│   │   │       │   ├── GithubFlavoredMarkdownExtension.php
│   │   │       │   ├── HeadingPermalink
│   │   │       │   │   ├── HeadingPermalinkExtension.php
│   │   │       │   │   ├── HeadingPermalink.php
│   │   │       │   │   ├── HeadingPermalinkProcessor.php
│   │   │       │   │   └── HeadingPermalinkRenderer.php
│   │   │       │   ├── InlinesOnly
│   │   │       │   │   ├── ChildRenderer.php
│   │   │       │   │   └── InlinesOnlyExtension.php
│   │   │       │   ├── Mention
│   │   │       │   │   ├── Generator
│   │   │       │   │   │   ├── CallbackGenerator.php
│   │   │       │   │   │   ├── MentionGeneratorInterface.php
│   │   │       │   │   │   └── StringTemplateLinkGenerator.php
│   │   │       │   │   ├── MentionExtension.php
│   │   │       │   │   ├── MentionParser.php
│   │   │       │   │   └── Mention.php
│   │   │       │   ├── SmartPunct
│   │   │       │   │   ├── DashParser.php
│   │   │       │   │   ├── EllipsesParser.php
│   │   │       │   │   ├── QuoteParser.php
│   │   │       │   │   ├── Quote.php
│   │   │       │   │   ├── QuoteProcessor.php
│   │   │       │   │   ├── ReplaceUnpairedQuotesListener.php
│   │   │       │   │   └── SmartPunctExtension.php
│   │   │       │   ├── Strikethrough
│   │   │       │   │   ├── StrikethroughDelimiterProcessor.php
│   │   │       │   │   ├── StrikethroughExtension.php
│   │   │       │   │   ├── Strikethrough.php
│   │   │       │   │   └── StrikethroughRenderer.php
│   │   │       │   ├── Table
│   │   │       │   │   ├── TableCell.php
│   │   │       │   │   ├── TableCellRenderer.php
│   │   │       │   │   ├── TableExtension.php
│   │   │       │   │   ├── TableParser.php
│   │   │       │   │   ├── Table.php
│   │   │       │   │   ├── TableRenderer.php
│   │   │       │   │   ├── TableRow.php
│   │   │       │   │   ├── TableRowRenderer.php
│   │   │       │   │   ├── TableSection.php
│   │   │       │   │   ├── TableSectionRenderer.php
│   │   │       │   │   └── TableStartParser.php
│   │   │       │   ├── TableOfContents
│   │   │       │   │   ├── Node
│   │   │       │   │   │   ├── TableOfContents.php
│   │   │       │   │   │   └── TableOfContentsPlaceholder.php
│   │   │       │   │   ├── Normalizer
│   │   │       │   │   │   ├── AsIsNormalizerStrategy.php
│   │   │       │   │   │   ├── FlatNormalizerStrategy.php
│   │   │       │   │   │   ├── NormalizerStrategyInterface.php
│   │   │       │   │   │   └── RelativeNormalizerStrategy.php
│   │   │       │   │   ├── TableOfContentsBuilder.php
│   │   │       │   │   ├── TableOfContentsExtension.php
│   │   │       │   │   ├── TableOfContentsGeneratorInterface.php
│   │   │       │   │   ├── TableOfContentsGenerator.php
│   │   │       │   │   ├── TableOfContentsPlaceholderParser.php
│   │   │       │   │   ├── TableOfContentsPlaceholderRenderer.php
│   │   │       │   │   └── TableOfContentsRenderer.php
│   │   │       │   └── TaskList
│   │   │       │       ├── TaskListExtension.php
│   │   │       │       ├── TaskListItemMarkerParser.php
│   │   │       │       ├── TaskListItemMarker.php
│   │   │       │       └── TaskListItemMarkerRenderer.php
│   │   │       ├── GithubFlavoredMarkdownConverter.php
│   │   │       ├── Input
│   │   │       │   ├── MarkdownInputInterface.php
│   │   │       │   └── MarkdownInput.php
│   │   │       ├── MarkdownConverterInterface.php
│   │   │       ├── MarkdownConverter.php
│   │   │       ├── Node
│   │   │       │   ├── Block
│   │   │       │   │   ├── AbstractBlock.php
│   │   │       │   │   ├── Document.php
│   │   │       │   │   ├── Paragraph.php
│   │   │       │   │   └── TightBlockInterface.php
│   │   │       │   ├── Inline
│   │   │       │   │   ├── AbstractInline.php
│   │   │       │   │   ├── AbstractStringContainer.php
│   │   │       │   │   ├── AdjacentTextMerger.php
│   │   │       │   │   ├── DelimitedInterface.php
│   │   │       │   │   ├── Newline.php
│   │   │       │   │   └── Text.php
│   │   │       │   ├── NodeIterator.php
│   │   │       │   ├── Node.php
│   │   │       │   ├── NodeWalkerEvent.php
│   │   │       │   ├── NodeWalker.php
│   │   │       │   ├── Query
│   │   │       │   │   ├── AndExpr.php
│   │   │       │   │   ├── ExpressionInterface.php
│   │   │       │   │   └── OrExpr.php
│   │   │       │   ├── Query.php
│   │   │       │   ├── RawMarkupContainerInterface.php
│   │   │       │   ├── StringContainerHelper.php
│   │   │       │   └── StringContainerInterface.php
│   │   │       ├── Normalizer
│   │   │       │   ├── SlugNormalizer.php
│   │   │       │   ├── TextNormalizerInterface.php
│   │   │       │   ├── TextNormalizer.php
│   │   │       │   ├── UniqueSlugNormalizerInterface.php
│   │   │       │   └── UniqueSlugNormalizer.php
│   │   │       ├── Output
│   │   │       │   ├── RenderedContentInterface.php
│   │   │       │   └── RenderedContent.php
│   │   │       ├── Parser
│   │   │       │   ├── Block
│   │   │       │   │   ├── AbstractBlockContinueParser.php
│   │   │       │   │   ├── BlockContinueParserInterface.php
│   │   │       │   │   ├── BlockContinueParserWithInlinesInterface.php
│   │   │       │   │   ├── BlockContinue.php
│   │   │       │   │   ├── BlockStartParserInterface.php
│   │   │       │   │   ├── BlockStart.php
│   │   │       │   │   ├── DocumentBlockParser.php
│   │   │       │   │   ├── ParagraphParser.php
│   │   │       │   │   └── SkipLinesStartingWithLettersParser.php
│   │   │       │   ├── Cursor.php
│   │   │       │   ├── CursorState.php
│   │   │       │   ├── Inline
│   │   │       │   │   ├── InlineParserInterface.php
│   │   │       │   │   ├── InlineParserMatch.php
│   │   │       │   │   └── NewlineParser.php
│   │   │       │   ├── InlineParserContext.php
│   │   │       │   ├── InlineParserEngineInterface.php
│   │   │       │   ├── InlineParserEngine.php
│   │   │       │   ├── MarkdownParserInterface.php
│   │   │       │   ├── MarkdownParser.php
│   │   │       │   ├── MarkdownParserStateInterface.php
│   │   │       │   ├── MarkdownParserState.php
│   │   │       │   └── ParserLogicException.php
│   │   │       ├── Reference
│   │   │       │   ├── ReferenceableInterface.php
│   │   │       │   ├── ReferenceInterface.php
│   │   │       │   ├── ReferenceMapInterface.php
│   │   │       │   ├── ReferenceMap.php
│   │   │       │   ├── ReferenceParser.php
│   │   │       │   └── Reference.php
│   │   │       ├── Renderer
│   │   │       │   ├── Block
│   │   │       │   │   ├── DocumentRenderer.php
│   │   │       │   │   └── ParagraphRenderer.php
│   │   │       │   ├── ChildNodeRendererInterface.php
│   │   │       │   ├── DocumentRendererInterface.php
│   │   │       │   ├── HtmlDecorator.php
│   │   │       │   ├── HtmlRenderer.php
│   │   │       │   ├── Inline
│   │   │       │   │   ├── NewlineRenderer.php
│   │   │       │   │   └── TextRenderer.php
│   │   │       │   ├── MarkdownRendererInterface.php
│   │   │       │   ├── NodeRendererInterface.php
│   │   │       │   └── NoMatchingRendererException.php
│   │   │       ├── Util
│   │   │       │   ├── ArrayCollection.php
│   │   │       │   ├── Html5EntityDecoder.php
│   │   │       │   ├── HtmlElement.php
│   │   │       │   ├── HtmlFilter.php
│   │   │       │   ├── LinkParserHelper.php
│   │   │       │   ├── PrioritizedList.php
│   │   │       │   ├── RegexHelper.php
│   │   │       │   ├── SpecReader.php
│   │   │       │   ├── UrlEncoder.php
│   │   │       │   └── Xml.php
│   │   │       └── Xml
│   │   │           ├── FallbackNodeXmlRenderer.php
│   │   │           ├── MarkdownToXmlConverter.php
│   │   │           ├── XmlNodeRendererInterface.php
│   │   │           └── XmlRenderer.php
│   │   ├── config
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ConfigurationAwareInterface.php
│   │   │       ├── ConfigurationBuilderInterface.php
│   │   │       ├── ConfigurationInterface.php
│   │   │       ├── Configuration.php
│   │   │       ├── ConfigurationProviderInterface.php
│   │   │       ├── Exception
│   │   │       │   ├── ConfigurationExceptionInterface.php
│   │   │       │   ├── InvalidConfigurationException.php
│   │   │       │   ├── UnknownOptionException.php
│   │   │       │   └── ValidationException.php
│   │   │       ├── MutableConfigurationInterface.php
│   │   │       ├── ReadOnlyConfiguration.php
│   │   │       └── SchemaBuilderInterface.php
│   │   ├── flysystem
│   │   │   ├── composer.json
│   │   │   ├── INFO.md
│   │   │   ├── LICENSE
│   │   │   ├── readme.md
│   │   │   └── src
│   │   │       ├── CalculateChecksumFromStream.php
│   │   │       ├── ChecksumAlgoIsNotSupported.php
│   │   │       ├── ChecksumProvider.php
│   │   │       ├── Config.php
│   │   │       ├── CorruptedPathDetected.php
│   │   │       ├── DecoratedAdapter.php
│   │   │       ├── DirectoryAttributes.php
│   │   │       ├── DirectoryListing.php
│   │   │       ├── FileAttributes.php
│   │   │       ├── FilesystemAdapter.php
│   │   │       ├── FilesystemException.php
│   │   │       ├── FilesystemOperationFailed.php
│   │   │       ├── FilesystemOperator.php
│   │   │       ├── Filesystem.php
│   │   │       ├── FilesystemReader.php
│   │   │       ├── FilesystemWriter.php
│   │   │       ├── InvalidStreamProvided.php
│   │   │       ├── InvalidVisibilityProvided.php
│   │   │       ├── MountManager.php
│   │   │       ├── PathNormalizer.php
│   │   │       ├── PathPrefixer.php
│   │   │       ├── PathTraversalDetected.php
│   │   │       ├── PortableVisibilityGuard.php
│   │   │       ├── ProxyArrayAccessToProperties.php
│   │   │       ├── ResolveIdenticalPathConflict.php
│   │   │       ├── StorageAttributes.php
│   │   │       ├── SymbolicLinkEncountered.php
│   │   │       ├── UnableToCheckDirectoryExistence.php
│   │   │       ├── UnableToCheckExistence.php
│   │   │       ├── UnableToCheckFileExistence.php
│   │   │       ├── UnableToCopyFile.php
│   │   │       ├── UnableToCreateDirectory.php
│   │   │       ├── UnableToDeleteDirectory.php
│   │   │       ├── UnableToDeleteFile.php
│   │   │       ├── UnableToGeneratePublicUrl.php
│   │   │       ├── UnableToGenerateTemporaryUrl.php
│   │   │       ├── UnableToListContents.php
│   │   │       ├── UnableToMountFilesystem.php
│   │   │       ├── UnableToMoveFile.php
│   │   │       ├── UnableToProvideChecksum.php
│   │   │       ├── UnableToReadFile.php
│   │   │       ├── UnableToResolveFilesystemMount.php
│   │   │       ├── UnableToRetrieveMetadata.php
│   │   │       ├── UnableToSetVisibility.php
│   │   │       ├── UnableToWriteFile.php
│   │   │       ├── UnixVisibility
│   │   │       │   ├── PortableVisibilityConverter.php
│   │   │       │   └── VisibilityConverter.php
│   │   │       ├── UnreadableFileEncountered.php
│   │   │       ├── UrlGeneration
│   │   │       │   ├── ChainedPublicUrlGenerator.php
│   │   │       │   ├── PrefixPublicUrlGenerator.php
│   │   │       │   ├── PublicUrlGenerator.php
│   │   │       │   ├── ShardedPrefixPublicUrlGenerator.php
│   │   │       │   └── TemporaryUrlGenerator.php
│   │   │       ├── Visibility.php
│   │   │       └── WhitespacePathNormalizer.php
│   │   ├── flysystem-local
│   │   │   ├── composer.json
│   │   │   ├── FallbackMimeTypeDetector.php
│   │   │   ├── LICENSE
│   │   │   └── LocalFilesystemAdapter.php
│   │   └── mime-type-detection
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── src
│   │           ├── EmptyExtensionToMimeTypeMap.php
│   │           ├── ExtensionLookup.php
│   │           ├── ExtensionMimeTypeDetector.php
│   │           ├── ExtensionToMimeTypeMap.php
│   │           ├── FinfoMimeTypeDetector.php
│   │           ├── GeneratedExtensionToMimeTypeMap.php
│   │           ├── MimeTypeDetector.php
│   │           └── OverridingExtensionToMimeTypeMap.php
│   ├── livewire
│   │   └── livewire
│   │       ├── composer.json
│   │       ├── config
│   │       │   └── livewire.php
│   │       ├── dist
│   │       │   ├── livewire.esm.js
│   │       │   ├── livewire.esm.js.map
│   │       │   ├── livewire.js
│   │       │   ├── livewire.min.js
│   │       │   ├── livewire.min.js.map
│   │       │   └── manifest.json
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── Attribute.php
│   │           ├── Attributes
│   │           │   ├── Computed.php
│   │           │   ├── Isolate.php
│   │           │   ├── Js.php
│   │           │   ├── Layout.php
│   │           │   ├── Lazy.php
│   │           │   ├── Locked.php
│   │           │   ├── Modelable.php
│   │           │   ├── On.php
│   │           │   ├── Reactive.php
│   │           │   ├── Renderless.php
│   │           │   ├── Rule.php
│   │           │   ├── Session.php
│   │           │   ├── Title.php
│   │           │   ├── Url.php
│   │           │   └── Validate.php
│   │           ├── ComponentHook.php
│   │           ├── ComponentHookRegistry.php
│   │           ├── Component.php
│   │           ├── Concerns
│   │           │   └── InteractsWithProperties.php
│   │           ├── Drawer
│   │           │   ├── BaseUtils.php
│   │           │   ├── ImplicitRouteBinding.php
│   │           │   ├── Regexes.php
│   │           │   └── Utils.php
│   │           ├── EventBus.php
│   │           ├── Exceptions
│   │           │   ├── BypassViewHandler.php
│   │           │   ├── ComponentAttributeMissingOnDynamicComponentException.php
│   │           │   ├── ComponentNotFoundException.php
│   │           │   ├── EventHandlerDoesNotExist.php
│   │           │   ├── LivewirePageExpiredBecauseNewDeploymentHasSignificantEnoughChanges.php
│   │           │   ├── MethodNotFoundException.php
│   │           │   ├── MissingRulesException.php
│   │           │   ├── NonPublicComponentMethodCall.php
│   │           │   ├── PropertyNotFoundException.php
│   │           │   ├── PublicPropertyNotFoundException.php
│   │           │   └── RootTagMissingFromViewException.php
│   │           ├── Features
│   │           │   ├── SupportAccessingParent
│   │           │   ├── SupportAttributes
│   │           │   │   ├── AttributeCollection.php
│   │           │   │   ├── AttributeLevel.php
│   │           │   │   ├── Attribute.php
│   │           │   │   ├── HandlesAttributes.php
│   │           │   │   └── SupportAttributes.php
│   │           │   ├── SupportAutoInjectedAssets
│   │           │   │   └── SupportAutoInjectedAssets.php
│   │           │   ├── SupportBladeAttributes
│   │           │   │   └── SupportBladeAttributes.php
│   │           │   ├── SupportChecksumErrorDebugging
│   │           │   │   └── SupportChecksumErrorDebugging.php
│   │           │   ├── SupportComputed
│   │           │   │   ├── BaseComputed.php
│   │           │   │   ├── CannotCallComputedDirectlyException.php
│   │           │   │   └── SupportLegacyComputedPropertySyntax.php
│   │           │   ├── SupportConsoleCommands
│   │           │   │   ├── Commands
│   │           │   │   │   ├── AttributeCommand.php
│   │           │   │   │   ├── ComponentParserFromExistingComponent.php
│   │           │   │   │   ├── ComponentParser.php
│   │           │   │   │   ├── CopyCommand.php
│   │           │   │   │   ├── CpCommand.php
│   │           │   │   │   ├── DeleteCommand.php
│   │           │   │   │   ├── FileManipulationCommand.php
│   │           │   │   │   ├── FormCommand.php
│   │           │   │   │   ├── LayoutCommand.php
│   │           │   │   │   ├── livewire.attribute.stub
│   │           │   │   │   ├── livewire.form.stub
│   │           │   │   │   ├── livewire.inline.stub
│   │           │   │   │   ├── livewire.layout.stub
│   │           │   │   │   ├── livewire.pest.stub
│   │           │   │   │   ├── livewire.stub
│   │           │   │   │   ├── livewire.test.stub
│   │           │   │   │   ├── livewire.view.stub
│   │           │   │   │   ├── MakeCommand.php
│   │           │   │   │   ├── MakeLivewireCommand.php
│   │           │   │   │   ├── MoveCommand.php
│   │           │   │   │   ├── MvCommand.php
│   │           │   │   │   ├── PublishCommand.php
│   │           │   │   │   ├── RmCommand.php
│   │           │   │   │   ├── S3CleanupCommand.php
│   │           │   │   │   ├── StubsCommand.php
│   │           │   │   │   ├── the-tao.php
│   │           │   │   │   ├── TouchCommand.php
│   │           │   │   │   ├── Upgrade
│   │           │   │   │   │   ├── AddLiveModifierToEntangleDirectives.php
│   │           │   │   │   │   ├── AddLiveModifierToWireModelDirectives.php
│   │           │   │   │   │   ├── ChangeDefaultLayoutView.php
│   │           │   │   │   │   ├── ChangeDefaultNamespace.php
│   │           │   │   │   │   ├── ChangeForgetComputedToUnset.php
│   │           │   │   │   │   ├── ChangeLazyToBlurModifierOnWireModelDirectives.php
│   │           │   │   │   │   ├── ChangeTestAssertionMethods.php
│   │           │   │   │   │   ├── ChangeWireLoadDirectiveToWireInit.php
│   │           │   │   │   │   ├── ClearViewCache.php
│   │           │   │   │   │   ├── RemoveDeferModifierFromEntangleDirectives.php
│   │           │   │   │   │   ├── RemoveDeferModifierFromWireModelDirectives.php
│   │           │   │   │   │   ├── RemovePrefetchModifierFromWireClickDirective.php
│   │           │   │   │   │   ├── RemovePreventModifierFromWireSubmitDirective.php
│   │           │   │   │   │   ├── ReplaceEmitWithDispatch.php
│   │           │   │   │   │   ├── ReplaceTemporaryUploadedFileNamespace.php
│   │           │   │   │   │   ├── RepublishNavigation.php
│   │           │   │   │   │   ├── ThirdPartyUpgradeNotice.php
│   │           │   │   │   │   ├── UpgradeAlpineInstructions.php
│   │           │   │   │   │   ├── UpgradeConfigInstructions.php
│   │           │   │   │   │   ├── UpgradeIntroduction.php
│   │           │   │   │   │   └── UpgradeStep.php
│   │           │   │   │   └── UpgradeCommand.php
│   │           │   │   └── SupportConsoleCommands.php
│   │           │   ├── SupportDataBinding
│   │           │   ├── SupportDisablingBackButtonCache
│   │           │   │   ├── DisableBackButtonCacheMiddleware.php
│   │           │   │   ├── HandlesDisablingBackButtonCache.php
│   │           │   │   └── SupportDisablingBackButtonCache.php
│   │           │   ├── SupportEntangle
│   │           │   │   └── SupportEntangle.php
│   │           │   ├── SupportErrorResponses
│   │           │   ├── SupportEvents
│   │           │   │   ├── BaseOn.php
│   │           │   │   ├── Event.php
│   │           │   │   ├── fake-echo.js
│   │           │   │   ├── HandlesEvents.php
│   │           │   │   ├── SupportEvents.php
│   │           │   │   └── TestsEvents.php
│   │           │   ├── SupportFileDownloads
│   │           │   │   ├── SupportFileDownloads.php
│   │           │   │   └── TestsFileDownloads.php
│   │           │   ├── SupportFileUploads
│   │           │   │   ├── browser_test_image_big.jpg
│   │           │   │   ├── browser_test_image.png
│   │           │   │   ├── FileNotPreviewableException.php
│   │           │   │   ├── FilePreviewController.php
│   │           │   │   ├── FileUploadConfiguration.php
│   │           │   │   ├── FileUploadController.php
│   │           │   │   ├── FileUploadSynth.php
│   │           │   │   ├── GenerateSignedUploadUrl.php
│   │           │   │   ├── MissingFileUploadsTraitException.php
│   │           │   │   ├── S3DoesntSupportMultipleFileUploads.php
│   │           │   │   ├── SupportFileUploads.php
│   │           │   │   ├── TemporaryUploadedFile.php
│   │           │   │   └── WithFileUploads.php
│   │           │   ├── SupportFormObjects
│   │           │   │   ├── FormObjectSynth.php
│   │           │   │   ├── Form.php
│   │           │   │   ├── HandlesFormObjects.php
│   │           │   │   └── SupportFormObjects.php
│   │           │   ├── SupportIsolating
│   │           │   │   ├── BaseIsolate.php
│   │           │   │   └── SupportIsolating.php
│   │           │   ├── SupportJsEvaluation
│   │           │   │   ├── BaseJs.php
│   │           │   │   ├── HandlesJsEvaluation.php
│   │           │   │   └── SupportJsEvaluation.php
│   │           │   ├── SupportLazyLoading
│   │           │   │   ├── BaseLazy.php
│   │           │   │   └── SupportLazyLoading.php
│   │           │   ├── SupportLegacyModels
│   │           │   │   ├── CannotBindToModelDataWithoutValidationRuleException.php
│   │           │   │   ├── EloquentCollectionSynth.php
│   │           │   │   ├── EloquentModelSynth.php
│   │           │   │   └── SupportLegacyModels.php
│   │           │   ├── SupportLifecycleHooks
│   │           │   │   ├── DirectlyCallingLifecycleHooksNotAllowedException.php
│   │           │   │   └── SupportLifecycleHooks.php
│   │           │   ├── SupportLocales
│   │           │   │   └── SupportLocales.php
│   │           │   ├── SupportLockedProperties
│   │           │   │   ├── BaseLocked.php
│   │           │   │   └── CannotUpdateLockedPropertyException.php
│   │           │   ├── SupportModels
│   │           │   │   ├── EloquentCollectionSynth.php
│   │           │   │   ├── ModelSynth.php
│   │           │   │   └── SupportModels.php
│   │           │   ├── SupportMorphAwareIfStatement
│   │           │   │   └── SupportMorphAwareIfStatement.php
│   │           │   ├── SupportMultipleRootElementDetection
│   │           │   │   ├── MultipleRootElementsDetectedException.php
│   │           │   │   └── SupportMultipleRootElementDetection.php
│   │           │   ├── SupportNavigate
│   │           │   │   ├── SupportNavigate.php
│   │           │   │   └── test-views
│   │           │   │       ├── changed-layout.blade.php
│   │           │   │       ├── changed-tracked-layout.blade.php
│   │           │   │       ├── layout.blade.php
│   │           │   │       ├── layout-with-navigate-outside.blade.php
│   │           │   │       ├── navbar-sidebar.blade.php
│   │           │   │       ├── test-navigate-asset.js
│   │           │   │       └── tracked-layout.blade.php
│   │           │   ├── SupportNestedComponentListeners
│   │           │   │   └── SupportNestedComponentListeners.php
│   │           │   ├── SupportNestingComponents
│   │           │   │   └── SupportNestingComponents.php
│   │           │   ├── SupportPageComponents
│   │           │   │   ├── BaseLayout.php
│   │           │   │   ├── BaseTitle.php
│   │           │   │   ├── HandlesPageComponents.php
│   │           │   │   ├── MissingLayoutException.php
│   │           │   │   ├── PageComponentConfig.php
│   │           │   │   └── SupportPageComponents.php
│   │           │   ├── SupportPagination
│   │           │   │   ├── HandlesPagination.php
│   │           │   │   ├── PaginationUrl.php
│   │           │   │   ├── SupportPagination.php
│   │           │   │   ├── views
│   │           │   │   │   ├── bootstrap.blade.php
│   │           │   │   │   ├── simple-bootstrap.blade.php
│   │           │   │   │   ├── simple-tailwind.blade.php
│   │           │   │   │   └── tailwind.blade.php
│   │           │   │   └── WithoutUrlPagination.php
│   │           │   ├── SupportPolling
│   │           │   ├── SupportQueryString
│   │           │   │   ├── BaseUrl.php
│   │           │   │   └── SupportQueryString.php
│   │           │   ├── SupportReactiveProps
│   │           │   │   ├── BaseReactive.php
│   │           │   │   ├── CannotMutateReactivePropException.php
│   │           │   │   └── SupportReactiveProps.php
│   │           │   ├── SupportRedirects
│   │           │   │   ├── HandlesRedirects.php
│   │           │   │   ├── Redirector.php
│   │           │   │   ├── SupportRedirects.php
│   │           │   │   └── TestsRedirects.php
│   │           │   ├── SupportScriptsAndAssets
│   │           │   │   ├── SupportScriptsAndAssets.php
│   │           │   │   └── test.js
│   │           │   ├── SupportSession
│   │           │   │   └── BaseSession.php
│   │           │   ├── SupportStdClasses
│   │           │   ├── SupportStreaming
│   │           │   │   ├── HandlesStreaming.php
│   │           │   │   └── SupportStreaming.php
│   │           │   ├── SupportTeleporting
│   │           │   │   └── SupportTeleporting.php
│   │           │   ├── SupportTesting
│   │           │   │   ├── ComponentState.php
│   │           │   │   ├── DuskBrowserMacros.php
│   │           │   │   ├── DuskTestable.php
│   │           │   │   ├── InitialRender.php
│   │           │   │   ├── MakesAssertions.php
│   │           │   │   ├── Render.php
│   │           │   │   ├── RequestBroker.php
│   │           │   │   ├── ShowDuskComponent.php
│   │           │   │   ├── SubsequentRender.php
│   │           │   │   ├── SupportTesting.php
│   │           │   │   └── Testable.php
│   │           │   ├── SupportTransitions
│   │           │   ├── SupportValidation
│   │           │   │   ├── BaseRule.php
│   │           │   │   ├── BaseValidate.php
│   │           │   │   ├── HandlesValidation.php
│   │           │   │   ├── SupportValidation.php
│   │           │   │   └── TestsValidation.php
│   │           │   ├── SupportWireables
│   │           │   │   ├── SupportWireables.php
│   │           │   │   └── WireableSynth.php
│   │           │   ├── SupportWireConfirm
│   │           │   ├── SupportWireLoading
│   │           │   │   └── browser_test_image.png
│   │           │   └── SupportWireModelingNestedComponents
│   │           │       ├── BaseModelable.php
│   │           │       └── SupportWireModelingNestedComponents.php
│   │           ├── Form.php
│   │           ├── helpers.php
│   │           ├── ImplicitlyBoundMethod.php
│   │           ├── LivewireManager.php
│   │           ├── Livewire.php
│   │           ├── LivewireServiceProvider.php
│   │           ├── Mechanisms
│   │           │   ├── CompileLivewireTags
│   │           │   │   ├── CompileLivewireTags.php
│   │           │   │   └── LivewireTagPrecompiler.php
│   │           │   ├── ComponentRegistry.php
│   │           │   ├── DataStore.php
│   │           │   ├── ExtendBlade
│   │           │   │   ├── DeterministicBladeKeys.php
│   │           │   │   ├── ExtendBlade.php
│   │           │   │   └── ExtendedCompilerEngine.php
│   │           │   ├── FrontendAssets
│   │           │   │   └── FrontendAssets.php
│   │           │   ├── HandleComponents
│   │           │   │   ├── BaseRenderless.php
│   │           │   │   ├── Checksum.php
│   │           │   │   ├── ComponentContext.php
│   │           │   │   ├── CorruptComponentPayloadException.php
│   │           │   │   ├── HandleComponents.php
│   │           │   │   ├── Synthesizers
│   │           │   │   │   ├── ArraySynth.php
│   │           │   │   │   ├── CarbonSynth.php
│   │           │   │   │   ├── CollectionSynth.php
│   │           │   │   │   ├── EnumSynth.php
│   │           │   │   │   ├── FloatSynth.php
│   │           │   │   │   ├── IntSynth.php
│   │           │   │   │   ├── StdClassSynth.php
│   │           │   │   │   ├── StringableSynth.php
│   │           │   │   │   └── Synth.php
│   │           │   │   └── ViewContext.php
│   │           │   ├── HandleRequests
│   │           │   │   └── HandleRequests.php
│   │           │   ├── Mechanism.php
│   │           │   ├── PersistentMiddleware
│   │           │   │   └── PersistentMiddleware.php
│   │           │   └── RenderComponent.php
│   │           ├── Pipe.php
│   │           ├── Transparency.php
│   │           ├── Wireable.php
│   │           ├── WireDirective.php
│   │           ├── WithFileUploads.php
│   │           ├── WithoutUrlPagination.php
│   │           ├── WithPagination.php
│   │           └── Wrapped.php
│   ├── mockery
│   │   └── mockery
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── CONTRIBUTING.md
│   │       ├── COPYRIGHT.md
│   │       ├── docs
│   │       │   ├── conf.py
│   │       │   ├── cookbook
│   │       │   │   ├── big_parent_class.rst
│   │       │   │   ├── class_constants.rst
│   │       │   │   ├── default_expectations.rst
│   │       │   │   ├── detecting_mock_objects.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── mockery_on.rst
│   │       │   │   ├── mocking_class_within_class.rst
│   │       │   │   ├── mocking_hard_dependencies.rst
│   │       │   │   └── not_calling_the_constructor.rst
│   │       │   ├── getting_started
│   │       │   │   ├── index.rst
│   │       │   │   ├── installation.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── quick_reference.rst
│   │       │   │   ├── simple_example.rst
│   │       │   │   └── upgrading.rst
│   │       │   ├── index.rst
│   │       │   ├── Makefile
│   │       │   ├── mockery
│   │       │   │   ├── configuration.rst
│   │       │   │   ├── exceptions.rst
│   │       │   │   ├── gotchas.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   └── reserved_method_names.rst
│   │       │   ├── README.md
│   │       │   ├── reference
│   │       │   │   ├── alternative_should_receive_syntax.rst
│   │       │   │   ├── argument_validation.rst
│   │       │   │   ├── creating_test_doubles.rst
│   │       │   │   ├── demeter_chains.rst
│   │       │   │   ├── expectations.rst
│   │       │   │   ├── final_methods_classes.rst
│   │       │   │   ├── index.rst
│   │       │   │   ├── instance_mocking.rst
│   │       │   │   ├── magic_methods.rst
│   │       │   │   ├── map.rst.inc
│   │       │   │   ├── partial_mocks.rst
│   │       │   │   ├── pass_by_reference_behaviours.rst
│   │       │   │   ├── phpunit_integration.rst
│   │       │   │   ├── protected_methods.rst
│   │       │   │   ├── public_properties.rst
│   │       │   │   ├── public_static_properties.rst
│   │       │   │   └── spies.rst
│   │       │   ├── requirements.txt
│   │       │   └── _static
│   │       ├── library
│   │       │   ├── helpers.php
│   │       │   ├── Mockery
│   │       │   │   ├── Adapter
│   │       │   │   │   └── Phpunit
│   │       │   │   │       ├── MockeryPHPUnitIntegrationAssertPostConditions.php
│   │       │   │   │       ├── MockeryPHPUnitIntegration.php
│   │       │   │   │       ├── MockeryTestCase.php
│   │       │   │   │       ├── MockeryTestCaseSetUp.php
│   │       │   │   │       ├── TestListener.php
│   │       │   │   │       └── TestListenerTrait.php
│   │       │   │   ├── ClosureWrapper.php
│   │       │   │   ├── CompositeExpectation.php
│   │       │   │   ├── Configuration.php
│   │       │   │   ├── Container.php
│   │       │   │   ├── CountValidator
│   │       │   │   │   ├── AtLeast.php
│   │       │   │   │   ├── AtMost.php
│   │       │   │   │   ├── CountValidatorAbstract.php
│   │       │   │   │   ├── CountValidatorInterface.php
│   │       │   │   │   ├── Exact.php
│   │       │   │   │   └── Exception.php
│   │       │   │   ├── Exception
│   │       │   │   │   ├── BadMethodCallException.php
│   │       │   │   │   ├── InvalidArgumentException.php
│   │       │   │   │   ├── InvalidCountException.php
│   │       │   │   │   ├── InvalidOrderException.php
│   │       │   │   │   ├── MockeryExceptionInterface.php
│   │       │   │   │   ├── NoMatchingExpectationException.php
│   │       │   │   │   └── RuntimeException.php
│   │       │   │   ├── Exception.php
│   │       │   │   ├── ExpectationDirector.php
│   │       │   │   ├── ExpectationInterface.php
│   │       │   │   ├── Expectation.php
│   │       │   │   ├── ExpectsHigherOrderMessage.php
│   │       │   │   ├── Generator
│   │       │   │   │   ├── CachingGenerator.php
│   │       │   │   │   ├── DefinedTargetClass.php
│   │       │   │   │   ├── Generator.php
│   │       │   │   │   ├── Method.php
│   │       │   │   │   ├── MockConfigurationBuilder.php
│   │       │   │   │   ├── MockConfiguration.php
│   │       │   │   │   ├── MockDefinition.php
│   │       │   │   │   ├── MockNameBuilder.php
│   │       │   │   │   ├── Parameter.php
│   │       │   │   │   ├── StringManipulation
│   │       │   │   │   │   └── Pass
│   │       │   │   │   │       ├── AvoidMethodClashPass.php
│   │       │   │   │   │       ├── CallTypeHintPass.php
│   │       │   │   │   │       ├── ClassAttributesPass.php
│   │       │   │   │   │       ├── ClassNamePass.php
│   │       │   │   │   │       ├── ClassPass.php
│   │       │   │   │   │       ├── ConstantsPass.php
│   │       │   │   │   │       ├── InstanceMockPass.php
│   │       │   │   │   │       ├── InterfacePass.php
│   │       │   │   │   │       ├── MagicMethodTypeHintsPass.php
│   │       │   │   │   │       ├── MethodDefinitionPass.php
│   │       │   │   │   │       ├── Pass.php
│   │       │   │   │   │       ├── RemoveBuiltinMethodsThatAreFinalPass.php
│   │       │   │   │   │       ├── RemoveDestructorPass.php
│   │       │   │   │   │       ├── RemoveUnserializeForInternalSerializableClassesPass.php
│   │       │   │   │   │       └── TraitPass.php
│   │       │   │   │   ├── StringManipulationGenerator.php
│   │       │   │   │   ├── TargetClassInterface.php
│   │       │   │   │   └── UndefinedTargetClass.php
│   │       │   │   ├── HigherOrderMessage.php
│   │       │   │   ├── Instantiator.php
│   │       │   │   ├── LegacyMockInterface.php
│   │       │   │   ├── Loader
│   │       │   │   │   ├── EvalLoader.php
│   │       │   │   │   ├── Loader.php
│   │       │   │   │   └── RequireLoader.php
│   │       │   │   ├── Matcher
│   │       │   │   │   ├── AndAnyOtherArgs.php
│   │       │   │   │   ├── AnyArgs.php
│   │       │   │   │   ├── AnyOf.php
│   │       │   │   │   ├── Any.php
│   │       │   │   │   ├── ArgumentListMatcher.php
│   │       │   │   │   ├── Closure.php
│   │       │   │   │   ├── Contains.php
│   │       │   │   │   ├── Ducktype.php
│   │       │   │   │   ├── HasKey.php
│   │       │   │   │   ├── HasValue.php
│   │       │   │   │   ├── IsEqual.php
│   │       │   │   │   ├── IsSame.php
│   │       │   │   │   ├── MatcherAbstract.php
│   │       │   │   │   ├── MatcherInterface.php
│   │       │   │   │   ├── MultiArgumentClosure.php
│   │       │   │   │   ├── MustBe.php
│   │       │   │   │   ├── NoArgs.php
│   │       │   │   │   ├── NotAnyOf.php
│   │       │   │   │   ├── Not.php
│   │       │   │   │   ├── Pattern.php
│   │       │   │   │   ├── Subset.php
│   │       │   │   │   └── Type.php
│   │       │   │   ├── MethodCall.php
│   │       │   │   ├── MockInterface.php
│   │       │   │   ├── Mock.php
│   │       │   │   ├── QuickDefinitionsConfiguration.php
│   │       │   │   ├── ReceivedMethodCalls.php
│   │       │   │   ├── Reflector.php
│   │       │   │   ├── Undefined.php
│   │       │   │   ├── VerificationDirector.php
│   │       │   │   └── VerificationExpectation.php
│   │       │   └── Mockery.php
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── SECURITY.md
│   ├── monolog
│   │   └── monolog
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── Monolog
│   │               ├── Attribute
│   │               │   ├── AsMonologProcessor.php
│   │               │   └── WithMonologChannel.php
│   │               ├── DateTimeImmutable.php
│   │               ├── ErrorHandler.php
│   │               ├── Formatter
│   │               │   ├── ChromePHPFormatter.php
│   │               │   ├── ElasticaFormatter.php
│   │               │   ├── ElasticsearchFormatter.php
│   │               │   ├── FlowdockFormatter.php
│   │               │   ├── FluentdFormatter.php
│   │               │   ├── FormatterInterface.php
│   │               │   ├── GelfMessageFormatter.php
│   │               │   ├── GoogleCloudLoggingFormatter.php
│   │               │   ├── HtmlFormatter.php
│   │               │   ├── JsonFormatter.php
│   │               │   ├── LineFormatter.php
│   │               │   ├── LogglyFormatter.php
│   │               │   ├── LogmaticFormatter.php
│   │               │   ├── LogstashFormatter.php
│   │               │   ├── MongoDBFormatter.php
│   │               │   ├── NormalizerFormatter.php
│   │               │   ├── ScalarFormatter.php
│   │               │   ├── SyslogFormatter.php
│   │               │   └── WildfireFormatter.php
│   │               ├── Handler
│   │               │   ├── AbstractHandler.php
│   │               │   ├── AbstractProcessingHandler.php
│   │               │   ├── AbstractSyslogHandler.php
│   │               │   ├── AmqpHandler.php
│   │               │   ├── BrowserConsoleHandler.php
│   │               │   ├── BufferHandler.php
│   │               │   ├── ChromePHPHandler.php
│   │               │   ├── CouchDBHandler.php
│   │               │   ├── CubeHandler.php
│   │               │   ├── Curl
│   │               │   │   └── Util.php
│   │               │   ├── DeduplicationHandler.php
│   │               │   ├── DoctrineCouchDBHandler.php
│   │               │   ├── DynamoDbHandler.php
│   │               │   ├── ElasticaHandler.php
│   │               │   ├── ElasticsearchHandler.php
│   │               │   ├── ErrorLogHandler.php
│   │               │   ├── FallbackGroupHandler.php
│   │               │   ├── FilterHandler.php
│   │               │   ├── FingersCrossed
│   │               │   │   ├── ActivationStrategyInterface.php
│   │               │   │   ├── ChannelLevelActivationStrategy.php
│   │               │   │   └── ErrorLevelActivationStrategy.php
│   │               │   ├── FingersCrossedHandler.php
│   │               │   ├── FirePHPHandler.php
│   │               │   ├── FleepHookHandler.php
│   │               │   ├── FlowdockHandler.php
│   │               │   ├── FormattableHandlerInterface.php
│   │               │   ├── FormattableHandlerTrait.php
│   │               │   ├── GelfHandler.php
│   │               │   ├── GroupHandler.php
│   │               │   ├── HandlerInterface.php
│   │               │   ├── Handler.php
│   │               │   ├── HandlerWrapper.php
│   │               │   ├── IFTTTHandler.php
│   │               │   ├── InsightOpsHandler.php
│   │               │   ├── LogEntriesHandler.php
│   │               │   ├── LogglyHandler.php
│   │               │   ├── LogmaticHandler.php
│   │               │   ├── MailHandler.php
│   │               │   ├── MandrillHandler.php
│   │               │   ├── MissingExtensionException.php
│   │               │   ├── MongoDBHandler.php
│   │               │   ├── NativeMailerHandler.php
│   │               │   ├── NewRelicHandler.php
│   │               │   ├── NoopHandler.php
│   │               │   ├── NullHandler.php
│   │               │   ├── OverflowHandler.php
│   │               │   ├── PHPConsoleHandler.php
│   │               │   ├── ProcessableHandlerInterface.php
│   │               │   ├── ProcessableHandlerTrait.php
│   │               │   ├── ProcessHandler.php
│   │               │   ├── PsrHandler.php
│   │               │   ├── PushoverHandler.php
│   │               │   ├── RedisHandler.php
│   │               │   ├── RedisPubSubHandler.php
│   │               │   ├── RollbarHandler.php
│   │               │   ├── RotatingFileHandler.php
│   │               │   ├── SamplingHandler.php
│   │               │   ├── SendGridHandler.php
│   │               │   ├── Slack
│   │               │   │   └── SlackRecord.php
│   │               │   ├── SlackHandler.php
│   │               │   ├── SlackWebhookHandler.php
│   │               │   ├── SocketHandler.php
│   │               │   ├── SqsHandler.php
│   │               │   ├── StreamHandler.php
│   │               │   ├── SymfonyMailerHandler.php
│   │               │   ├── SyslogHandler.php
│   │               │   ├── SyslogUdp
│   │               │   │   └── UdpSocket.php
│   │               │   ├── SyslogUdpHandler.php
│   │               │   ├── TelegramBotHandler.php
│   │               │   ├── TestHandler.php
│   │               │   ├── WebRequestRecognizerTrait.php
│   │               │   ├── WhatFailureGroupHandler.php
│   │               │   └── ZendMonitorHandler.php
│   │               ├── Level.php
│   │               ├── Logger.php
│   │               ├── LogRecord.php
│   │               ├── Processor
│   │               │   ├── ClosureContextProcessor.php
│   │               │   ├── GitProcessor.php
│   │               │   ├── HostnameProcessor.php
│   │               │   ├── IntrospectionProcessor.php
│   │               │   ├── LoadAverageProcessor.php
│   │               │   ├── MemoryPeakUsageProcessor.php
│   │               │   ├── MemoryProcessor.php
│   │               │   ├── MemoryUsageProcessor.php
│   │               │   ├── MercurialProcessor.php
│   │               │   ├── ProcessIdProcessor.php
│   │               │   ├── ProcessorInterface.php
│   │               │   ├── PsrLogMessageProcessor.php
│   │               │   ├── TagProcessor.php
│   │               │   ├── UidProcessor.php
│   │               │   └── WebProcessor.php
│   │               ├── Registry.php
│   │               ├── ResettableInterface.php
│   │               ├── SignalHandler.php
│   │               ├── Test
│   │               │   └── TestCase.php
│   │               └── Utils.php
│   ├── myclabs
│   │   └── deep-copy
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── DeepCopy
│   │               ├── deep_copy.php
│   │               ├── DeepCopy.php
│   │               ├── Exception
│   │               │   ├── CloneException.php
│   │               │   └── PropertyException.php
│   │               ├── Filter
│   │               │   ├── ChainableFilter.php
│   │               │   ├── Doctrine
│   │               │   │   ├── DoctrineCollectionFilter.php
│   │               │   │   ├── DoctrineEmptyCollectionFilter.php
│   │               │   │   └── DoctrineProxyFilter.php
│   │               │   ├── Filter.php
│   │               │   ├── KeepFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   └── SetNullFilter.php
│   │               ├── Matcher
│   │               │   ├── Doctrine
│   │               │   │   └── DoctrineProxyMatcher.php
│   │               │   ├── Matcher.php
│   │               │   ├── PropertyMatcher.php
│   │               │   ├── PropertyNameMatcher.php
│   │               │   └── PropertyTypeMatcher.php
│   │               ├── Reflection
│   │               │   └── ReflectionHelper.php
│   │               ├── TypeFilter
│   │               │   ├── Date
│   │               │   │   ├── DateIntervalFilter.php
│   │               │   │   └── DatePeriodFilter.php
│   │               │   ├── ReplaceFilter.php
│   │               │   ├── ShallowCopyFilter.php
│   │               │   ├── Spl
│   │               │   │   ├── ArrayObjectFilter.php
│   │               │   │   ├── SplDoublyLinkedListFilter.php
│   │               │   │   └── SplDoublyLinkedList.php
│   │               │   └── TypeFilter.php
│   │               └── TypeMatcher
│   │                   └── TypeMatcher.php
│   ├── nesbot
│   │   └── carbon
│   │       ├── bin
│   │       │   ├── carbon
│   │       │   └── carbon.bat
│   │       ├── composer.json
│   │       ├── extension.neon
│   │       ├── lazy
│   │       │   └── Carbon
│   │       │       ├── MessageFormatter
│   │       │       │   ├── MessageFormatterMapperStrongType.php
│   │       │       │   └── MessageFormatterMapperWeakType.php
│   │       │       ├── PHPStan
│   │       │       │   ├── AbstractMacroBuiltin.php
│   │       │       │   ├── AbstractMacroStatic.php
│   │       │       │   ├── MacroStrongType.php
│   │       │       │   └── MacroWeakType.php
│   │       │       ├── TranslatorStrongType.php
│   │       │       └── TranslatorWeakType.php
│   │       ├── LICENSE
│   │       ├── readme.md
│   │       ├── sponsors.php
│   │       └── src
│   │           └── Carbon
│   │               ├── AbstractTranslator.php
│   │               ├── CarbonConverterInterface.php
│   │               ├── CarbonImmutable.php
│   │               ├── CarbonInterface.php
│   │               ├── CarbonInterval.php
│   │               ├── CarbonPeriodImmutable.php
│   │               ├── CarbonPeriod.php
│   │               ├── Carbon.php
│   │               ├── CarbonTimeZone.php
│   │               ├── Cli
│   │               │   └── Invoker.php
│   │               ├── Exceptions
│   │               │   ├── BadComparisonUnitException.php
│   │               │   ├── BadFluentConstructorException.php
│   │               │   ├── BadFluentSetterException.php
│   │               │   ├── BadMethodCallException.php
│   │               │   ├── EndLessPeriodException.php
│   │               │   ├── Exception.php
│   │               │   ├── ImmutableException.php
│   │               │   ├── InvalidArgumentException.php
│   │               │   ├── InvalidCastException.php
│   │               │   ├── InvalidDateException.php
│   │               │   ├── InvalidFormatException.php
│   │               │   ├── InvalidIntervalException.php
│   │               │   ├── InvalidPeriodDateException.php
│   │               │   ├── InvalidPeriodParameterException.php
│   │               │   ├── InvalidTimeZoneException.php
│   │               │   ├── InvalidTypeException.php
│   │               │   ├── NotACarbonClassException.php
│   │               │   ├── NotAPeriodException.php
│   │               │   ├── NotLocaleAwareException.php
│   │               │   ├── OutOfRangeException.php
│   │               │   ├── ParseErrorException.php
│   │               │   ├── RuntimeException.php
│   │               │   ├── UnitException.php
│   │               │   ├── UnitNotConfiguredException.php
│   │               │   ├── UnknownGetterException.php
│   │               │   ├── UnknownMethodException.php
│   │               │   ├── UnknownSetterException.php
│   │               │   ├── UnknownUnitException.php
│   │               │   └── UnreachableException.php
│   │               ├── FactoryImmutable.php
│   │               ├── Factory.php
│   │               ├── Lang
│   │               │   ├── aa_DJ.php
│   │               │   ├── aa_ER.php
│   │               │   ├── aa_ER@saaho.php
│   │               │   ├── aa_ET.php
│   │               │   ├── aa.php
│   │               │   ├── af_NA.php
│   │               │   ├── af.php
│   │               │   ├── af_ZA.php
│   │               │   ├── agq.php
│   │               │   ├── agr_PE.php
│   │               │   ├── agr.php
│   │               │   ├── ak_GH.php
│   │               │   ├── ak.php
│   │               │   ├── am_ET.php
│   │               │   ├── am.php
│   │               │   ├── an_ES.php
│   │               │   ├── an.php
│   │               │   ├── anp_IN.php
│   │               │   ├── anp.php
│   │               │   ├── ar_AE.php
│   │               │   ├── ar_BH.php
│   │               │   ├── ar_DJ.php
│   │               │   ├── ar_DZ.php
│   │               │   ├── ar_EG.php
│   │               │   ├── ar_EH.php
│   │               │   ├── ar_ER.php
│   │               │   ├── ar_IL.php
│   │               │   ├── ar_IN.php
│   │               │   ├── ar_IQ.php
│   │               │   ├── ar_JO.php
│   │               │   ├── ar_KM.php
│   │               │   ├── ar_KW.php
│   │               │   ├── ar_LB.php
│   │               │   ├── ar_LY.php
│   │               │   ├── ar_MA.php
│   │               │   ├── ar_MR.php
│   │               │   ├── ar_OM.php
│   │               │   ├── ar.php
│   │               │   ├── ar_PS.php
│   │               │   ├── ar_QA.php
│   │               │   ├── ar_SA.php
│   │               │   ├── ar_SD.php
│   │               │   ├── ar_Shakl.php
│   │               │   ├── ar_SO.php
│   │               │   ├── ar_SS.php
│   │               │   ├── ar_SY.php
│   │               │   ├── ar_TD.php
│   │               │   ├── ar_TN.php
│   │               │   ├── ar_YE.php
│   │               │   ├── asa.php
│   │               │   ├── as_IN.php
│   │               │   ├── as.php
│   │               │   ├── ast_ES.php
│   │               │   ├── ast.php
│   │               │   ├── ayc_PE.php
│   │               │   ├── ayc.php
│   │               │   ├── az_AZ.php
│   │               │   ├── az_Cyrl.php
│   │               │   ├── az_IR.php
│   │               │   ├── az_Latn.php
│   │               │   ├── az.php
│   │               │   ├── bas.php
│   │               │   ├── be_BY@latin.php
│   │               │   ├── be_BY.php
│   │               │   ├── bem.php
│   │               │   ├── bem_ZM.php
│   │               │   ├── be.php
│   │               │   ├── ber_DZ.php
│   │               │   ├── ber_MA.php
│   │               │   ├── ber.php
│   │               │   ├── bez.php
│   │               │   ├── bg_BG.php
│   │               │   ├── bg.php
│   │               │   ├── bhb_IN.php
│   │               │   ├── bhb.php
│   │               │   ├── bho_IN.php
│   │               │   ├── bho.php
│   │               │   ├── bi.php
│   │               │   ├── bi_VU.php
│   │               │   ├── bm.php
│   │               │   ├── bn_BD.php
│   │               │   ├── bn_IN.php
│   │               │   ├── bn.php
│   │               │   ├── bo_CN.php
│   │               │   ├── bo_IN.php
│   │               │   ├── bo.php
│   │               │   ├── br_FR.php
│   │               │   ├── br.php
│   │               │   ├── brx_IN.php
│   │               │   ├── brx.php
│   │               │   ├── bs_BA.php
│   │               │   ├── bs_Cyrl.php
│   │               │   ├── bs_Latn.php
│   │               │   ├── bs.php
│   │               │   ├── byn_ER.php
│   │               │   ├── byn.php
│   │               │   ├── ca_AD.php
│   │               │   ├── ca_ES.php
│   │               │   ├── ca_ES_Valencia.php
│   │               │   ├── ca_FR.php
│   │               │   ├── ca_IT.php
│   │               │   ├── ca.php
│   │               │   ├── ccp_IN.php
│   │               │   ├── ccp.php
│   │               │   ├── ce.php
│   │               │   ├── ce_RU.php
│   │               │   ├── cgg.php
│   │               │   ├── chr.php
│   │               │   ├── chr_US.php
│   │               │   ├── ckb.php
│   │               │   ├── cmn.php
│   │               │   ├── cmn_TW.php
│   │               │   ├── crh.php
│   │               │   ├── crh_UA.php
│   │               │   ├── csb.php
│   │               │   ├── csb_PL.php
│   │               │   ├── cs_CZ.php
│   │               │   ├── cs.php
│   │               │   ├── cu.php
│   │               │   ├── cv.php
│   │               │   ├── cv_RU.php
│   │               │   ├── cy_GB.php
│   │               │   ├── cy.php
│   │               │   ├── da_DK.php
│   │               │   ├── da_GL.php
│   │               │   ├── da.php
│   │               │   ├── dav.php
│   │               │   ├── de_AT.php
│   │               │   ├── de_BE.php
│   │               │   ├── de_CH.php
│   │               │   ├── de_DE.php
│   │               │   ├── de_IT.php
│   │               │   ├── de_LI.php
│   │               │   ├── de_LU.php
│   │               │   ├── de.php
│   │               │   ├── dje.php
│   │               │   ├── doi_IN.php
│   │               │   ├── doi.php
│   │               │   ├── dsb_DE.php
│   │               │   ├── dsb.php
│   │               │   ├── dua.php
│   │               │   ├── dv_MV.php
│   │               │   ├── dv.php
│   │               │   ├── dyo.php
│   │               │   ├── dz_BT.php
│   │               │   ├── dz.php
│   │               │   ├── ebu.php
│   │               │   ├── ee.php
│   │               │   ├── ee_TG.php
│   │               │   ├── el_CY.php
│   │               │   ├── el_GR.php
│   │               │   ├── el.php
│   │               │   ├── en_001.php
│   │               │   ├── en_150.php
│   │               │   ├── en_AG.php
│   │               │   ├── en_AI.php
│   │               │   ├── en_AS.php
│   │               │   ├── en_AT.php
│   │               │   ├── en_AU.php
│   │               │   ├── en_BB.php
│   │               │   ├── en_BE.php
│   │               │   ├── en_BI.php
│   │               │   ├── en_BM.php
│   │               │   ├── en_BS.php
│   │               │   ├── en_BW.php
│   │               │   ├── en_BZ.php
│   │               │   ├── en_CA.php
│   │               │   ├── en_CC.php
│   │               │   ├── en_CH.php
│   │               │   ├── en_CK.php
│   │               │   ├── en_CM.php
│   │               │   ├── en_CX.php
│   │               │   ├── en_CY.php
│   │               │   ├── en_DE.php
│   │               │   ├── en_DG.php
│   │               │   ├── en_DK.php
│   │               │   ├── en_DM.php
│   │               │   ├── en_ER.php
│   │               │   ├── en_FI.php
│   │               │   ├── en_FJ.php
│   │               │   ├── en_FK.php
│   │               │   ├── en_FM.php
│   │               │   ├── en_GB.php
│   │               │   ├── en_GD.php
│   │               │   ├── en_GG.php
│   │               │   ├── en_GH.php
│   │               │   ├── en_GI.php
│   │               │   ├── en_GM.php
│   │               │   ├── en_GU.php
│   │               │   ├── en_GY.php
│   │               │   ├── en_HK.php
│   │               │   ├── en_IE.php
│   │               │   ├── en_IL.php
│   │               │   ├── en_IM.php
│   │               │   ├── en_IN.php
│   │               │   ├── en_IO.php
│   │               │   ├── en_ISO.php
│   │               │   ├── en_JE.php
│   │               │   ├── en_JM.php
│   │               │   ├── en_KE.php
│   │               │   ├── en_KI.php
│   │               │   ├── en_KN.php
│   │               │   ├── en_KY.php
│   │               │   ├── en_LC.php
│   │               │   ├── en_LR.php
│   │               │   ├── en_LS.php
│   │               │   ├── en_MG.php
│   │               │   ├── en_MH.php
│   │               │   ├── en_MO.php
│   │               │   ├── en_MP.php
│   │               │   ├── en_MS.php
│   │               │   ├── en_MT.php
│   │               │   ├── en_MU.php
│   │               │   ├── en_MW.php
│   │               │   ├── en_MY.php
│   │               │   ├── en_NA.php
│   │               │   ├── en_NF.php
│   │               │   ├── en_NG.php
│   │               │   ├── en_NL.php
│   │               │   ├── en_NR.php
│   │               │   ├── en_NU.php
│   │               │   ├── en_NZ.php
│   │               │   ├── en_PG.php
│   │               │   ├── en.php
│   │               │   ├── en_PH.php
│   │               │   ├── en_PK.php
│   │               │   ├── en_PN.php
│   │               │   ├── en_PR.php
│   │               │   ├── en_PW.php
│   │               │   ├── en_RW.php
│   │               │   ├── en_SB.php
│   │               │   ├── en_SC.php
│   │               │   ├── en_SD.php
│   │               │   ├── en_SE.php
│   │               │   ├── en_SG.php
│   │               │   ├── en_SH.php
│   │               │   ├── en_SI.php
│   │               │   ├── en_SL.php
│   │               │   ├── en_SS.php
│   │               │   ├── en_SX.php
│   │               │   ├── en_SZ.php
│   │               │   ├── en_TC.php
│   │               │   ├── en_TK.php
│   │               │   ├── en_TO.php
│   │               │   ├── en_TT.php
│   │               │   ├── en_TV.php
│   │               │   ├── en_TZ.php
│   │               │   ├── en_UG.php
│   │               │   ├── en_UM.php
│   │               │   ├── en_US.php
│   │               │   ├── en_US_Posix.php
│   │               │   ├── en_VC.php
│   │               │   ├── en_VG.php
│   │               │   ├── en_VI.php
│   │               │   ├── en_VU.php
│   │               │   ├── en_WS.php
│   │               │   ├── en_ZA.php
│   │               │   ├── en_ZM.php
│   │               │   ├── en_ZW.php
│   │               │   ├── eo.php
│   │               │   ├── es_419.php
│   │               │   ├── es_AR.php
│   │               │   ├── es_BO.php
│   │               │   ├── es_BR.php
│   │               │   ├── es_BZ.php
│   │               │   ├── es_CL.php
│   │               │   ├── es_CO.php
│   │               │   ├── es_CR.php
│   │               │   ├── es_CU.php
│   │               │   ├── es_DO.php
│   │               │   ├── es_EA.php
│   │               │   ├── es_EC.php
│   │               │   ├── es_ES.php
│   │               │   ├── es_GQ.php
│   │               │   ├── es_GT.php
│   │               │   ├── es_HN.php
│   │               │   ├── es_IC.php
│   │               │   ├── es_MX.php
│   │               │   ├── es_NI.php
│   │               │   ├── es_PA.php
│   │               │   ├── es_PE.php
│   │               │   ├── es.php
│   │               │   ├── es_PH.php
│   │               │   ├── es_PR.php
│   │               │   ├── es_PY.php
│   │               │   ├── es_SV.php
│   │               │   ├── es_US.php
│   │               │   ├── es_UY.php
│   │               │   ├── es_VE.php
│   │               │   ├── et_EE.php
│   │               │   ├── et.php
│   │               │   ├── eu_ES.php
│   │               │   ├── eu.php
│   │               │   ├── ewo.php
│   │               │   ├── fa_AF.php
│   │               │   ├── fa_IR.php
│   │               │   ├── fa.php
│   │               │   ├── ff_CM.php
│   │               │   ├── ff_GN.php
│   │               │   ├── ff_MR.php
│   │               │   ├── ff.php
│   │               │   ├── ff_SN.php
│   │               │   ├── fi_FI.php
│   │               │   ├── fil.php
│   │               │   ├── fil_PH.php
│   │               │   ├── fi.php
│   │               │   ├── fo_DK.php
│   │               │   ├── fo_FO.php
│   │               │   ├── fo.php
│   │               │   ├── fr_BE.php
│   │               │   ├── fr_BF.php
│   │               │   ├── fr_BI.php
│   │               │   ├── fr_BJ.php
│   │               │   ├── fr_BL.php
│   │               │   ├── fr_CA.php
│   │               │   ├── fr_CD.php
│   │               │   ├── fr_CF.php
│   │               │   ├── fr_CG.php
│   │               │   ├── fr_CH.php
│   │               │   ├── fr_CI.php
│   │               │   ├── fr_CM.php
│   │               │   ├── fr_DJ.php
│   │               │   ├── fr_DZ.php
│   │               │   ├── fr_FR.php
│   │               │   ├── fr_GA.php
│   │               │   ├── fr_GF.php
│   │               │   ├── fr_GN.php
│   │               │   ├── fr_GP.php
│   │               │   ├── fr_GQ.php
│   │               │   ├── fr_HT.php
│   │               │   ├── fr_KM.php
│   │               │   ├── fr_LU.php
│   │               │   ├── fr_MA.php
│   │               │   ├── fr_MC.php
│   │               │   ├── fr_MF.php
│   │               │   ├── fr_MG.php
│   │               │   ├── fr_ML.php
│   │               │   ├── fr_MQ.php
│   │               │   ├── fr_MR.php
│   │               │   ├── fr_MU.php
│   │               │   ├── fr_NC.php
│   │               │   ├── fr_NE.php
│   │               │   ├── fr_PF.php
│   │               │   ├── fr.php
│   │               │   ├── fr_PM.php
│   │               │   ├── fr_RE.php
│   │               │   ├── fr_RW.php
│   │               │   ├── fr_SC.php
│   │               │   ├── fr_SN.php
│   │               │   ├── fr_SY.php
│   │               │   ├── fr_TD.php
│   │               │   ├── fr_TG.php
│   │               │   ├── fr_TN.php
│   │               │   ├── fr_VU.php
│   │               │   ├── fr_WF.php
│   │               │   ├── fr_YT.php
│   │               │   ├── fur_IT.php
│   │               │   ├── fur.php
│   │               │   ├── fy_DE.php
│   │               │   ├── fy_NL.php
│   │               │   ├── fy.php
│   │               │   ├── ga_IE.php
│   │               │   ├── ga.php
│   │               │   ├── gd_GB.php
│   │               │   ├── gd.php
│   │               │   ├── gez_ER.php
│   │               │   ├── gez_ET.php
│   │               │   ├── gez.php
│   │               │   ├── gl_ES.php
│   │               │   ├── gl.php
│   │               │   ├── gom_Latn.php
│   │               │   ├── gom.php
│   │               │   ├── gsw_CH.php
│   │               │   ├── gsw_FR.php
│   │               │   ├── gsw_LI.php
│   │               │   ├── gsw.php
│   │               │   ├── gu_IN.php
│   │               │   ├── gu.php
│   │               │   ├── guz.php
│   │               │   ├── gv_GB.php
│   │               │   ├── gv.php
│   │               │   ├── ha_GH.php
│   │               │   ├── hak.php
│   │               │   ├── hak_TW.php
│   │               │   ├── ha_NE.php
│   │               │   ├── ha_NG.php
│   │               │   ├── ha.php
│   │               │   ├── haw.php
│   │               │   ├── he_IL.php
│   │               │   ├── he.php
│   │               │   ├── hif_FJ.php
│   │               │   ├── hif.php
│   │               │   ├── hi_IN.php
│   │               │   ├── hi.php
│   │               │   ├── hne_IN.php
│   │               │   ├── hne.php
│   │               │   ├── hr_BA.php
│   │               │   ├── hr_HR.php
│   │               │   ├── hr.php
│   │               │   ├── hsb_DE.php
│   │               │   ├── hsb.php
│   │               │   ├── ht_HT.php
│   │               │   ├── ht.php
│   │               │   ├── hu_HU.php
│   │               │   ├── hu.php
│   │               │   ├── hy_AM.php
│   │               │   ├── hy.php
│   │               │   ├── i18n.php
│   │               │   ├── ia_FR.php
│   │               │   ├── ia.php
│   │               │   ├── id_ID.php
│   │               │   ├── id.php
│   │               │   ├── ig_NG.php
│   │               │   ├── ig.php
│   │               │   ├── ii.php
│   │               │   ├── ik_CA.php
│   │               │   ├── ik.php
│   │               │   ├── in.php
│   │               │   ├── is_IS.php
│   │               │   ├── is.php
│   │               │   ├── it_CH.php
│   │               │   ├── it_IT.php
│   │               │   ├── it.php
│   │               │   ├── it_SM.php
│   │               │   ├── it_VA.php
│   │               │   ├── iu_CA.php
│   │               │   ├── iu.php
│   │               │   ├── iw.php
│   │               │   ├── ja_JP.php
│   │               │   ├── ja.php
│   │               │   ├── jgo.php
│   │               │   ├── jmc.php
│   │               │   ├── jv.php
│   │               │   ├── kab_DZ.php
│   │               │   ├── kab.php
│   │               │   ├── ka_GE.php
│   │               │   ├── kam.php
│   │               │   ├── ka.php
│   │               │   ├── kde.php
│   │               │   ├── kea.php
│   │               │   ├── khq.php
│   │               │   ├── ki.php
│   │               │   ├── kkj.php
│   │               │   ├── kk_KZ.php
│   │               │   ├── kk.php
│   │               │   ├── kl_GL.php
│   │               │   ├── kln.php
│   │               │   ├── kl.php
│   │               │   ├── km_KH.php
│   │               │   ├── km.php
│   │               │   ├── kn_IN.php
│   │               │   ├── kn.php
│   │               │   ├── kok_IN.php
│   │               │   ├── kok.php
│   │               │   ├── ko_KP.php
│   │               │   ├── ko_KR.php
│   │               │   ├── ko.php
│   │               │   ├── ksb.php
│   │               │   ├── ksf.php
│   │               │   ├── ksh.php
│   │               │   ├── ks_IN@devanagari.php
│   │               │   ├── ks_IN.php
│   │               │   ├── ks.php
│   │               │   ├── ku.php
│   │               │   ├── ku_TR.php
│   │               │   ├── kw_GB.php
│   │               │   ├── kw.php
│   │               │   ├── ky_KG.php
│   │               │   ├── ky.php
│   │               │   ├── lag.php
│   │               │   ├── lb_LU.php
│   │               │   ├── lb.php
│   │               │   ├── lg.php
│   │               │   ├── lg_UG.php
│   │               │   ├── lij_IT.php
│   │               │   ├── lij.php
│   │               │   ├── li_NL.php
│   │               │   ├── li.php
│   │               │   ├── lkt.php
│   │               │   ├── ln_AO.php
│   │               │   ├── ln_CD.php
│   │               │   ├── ln_CF.php
│   │               │   ├── ln_CG.php
│   │               │   ├── ln.php
│   │               │   ├── lo_LA.php
│   │               │   ├── lo.php
│   │               │   ├── lrc_IQ.php
│   │               │   ├── lrc.php
│   │               │   ├── lt_LT.php
│   │               │   ├── lt.php
│   │               │   ├── luo.php
│   │               │   ├── lu.php
│   │               │   ├── luy.php
│   │               │   ├── lv_LV.php
│   │               │   ├── lv.php
│   │               │   ├── lzh.php
│   │               │   ├── lzh_TW.php
│   │               │   ├── mag_IN.php
│   │               │   ├── mag.php
│   │               │   ├── mai_IN.php
│   │               │   ├── mai.php
│   │               │   ├── mas.php
│   │               │   ├── mas_TZ.php
│   │               │   ├── mer.php
│   │               │   ├── mfe_MU.php
│   │               │   ├── mfe.php
│   │               │   ├── mgh.php
│   │               │   ├── mg_MG.php
│   │               │   ├── mgo.php
│   │               │   ├── mg.php
│   │               │   ├── mhr.php
│   │               │   ├── mhr_RU.php
│   │               │   ├── mi_NZ.php
│   │               │   ├── mi.php
│   │               │   ├── miq_NI.php
│   │               │   ├── miq.php
│   │               │   ├── mjw_IN.php
│   │               │   ├── mjw.php
│   │               │   ├── mk_MK.php
│   │               │   ├── mk.php
│   │               │   ├── ml_IN.php
│   │               │   ├── ml.php
│   │               │   ├── mni_IN.php
│   │               │   ├── mni.php
│   │               │   ├── mn_MN.php
│   │               │   ├── mn.php
│   │               │   ├── mo.php
│   │               │   ├── mr_IN.php
│   │               │   ├── mr.php
│   │               │   ├── ms_BN.php
│   │               │   ├── ms_MY.php
│   │               │   ├── ms.php
│   │               │   ├── ms_SG.php
│   │               │   ├── mt_MT.php
│   │               │   ├── mt.php
│   │               │   ├── mua.php
│   │               │   ├── my_MM.php
│   │               │   ├── my.php
│   │               │   ├── mzn.php
│   │               │   ├── nan.php
│   │               │   ├── nan_TW@latin.php
│   │               │   ├── nan_TW.php
│   │               │   ├── naq.php
│   │               │   ├── nb_NO.php
│   │               │   ├── nb.php
│   │               │   ├── nb_SJ.php
│   │               │   ├── nd.php
│   │               │   ├── nds_DE.php
│   │               │   ├── nds_NL.php
│   │               │   ├── nds.php
│   │               │   ├── ne_IN.php
│   │               │   ├── ne_NP.php
│   │               │   ├── ne.php
│   │               │   ├── nhn_MX.php
│   │               │   ├── nhn.php
│   │               │   ├── niu_NU.php
│   │               │   ├── niu.php
│   │               │   ├── nl_AW.php
│   │               │   ├── nl_BE.php
│   │               │   ├── nl_BQ.php
│   │               │   ├── nl_CW.php
│   │               │   ├── nl_NL.php
│   │               │   ├── nl.php
│   │               │   ├── nl_SR.php
│   │               │   ├── nl_SX.php
│   │               │   ├── nmg.php
│   │               │   ├── nnh.php
│   │               │   ├── nn_NO.php
│   │               │   ├── nn.php
│   │               │   ├── no.php
│   │               │   ├── nr.php
│   │               │   ├── nr_ZA.php
│   │               │   ├── nso.php
│   │               │   ├── nso_ZA.php
│   │               │   ├── nus.php
│   │               │   ├── nyn.php
│   │               │   ├── oc_FR.php
│   │               │   ├── oc.php
│   │               │   ├── om_ET.php
│   │               │   ├── om_KE.php
│   │               │   ├── om.php
│   │               │   ├── or_IN.php
│   │               │   ├── or.php
│   │               │   ├── os.php
│   │               │   ├── os_RU.php
│   │               │   ├── pa_Arab.php
│   │               │   ├── pa_Guru.php
│   │               │   ├── pa_IN.php
│   │               │   ├── pap_AW.php
│   │               │   ├── pap_CW.php
│   │               │   ├── pa.php
│   │               │   ├── pa_PK.php
│   │               │   ├── pap.php
│   │               │   ├── pl.php
│   │               │   ├── pl_PL.php
│   │               │   ├── prg.php
│   │               │   ├── ps_AF.php
│   │               │   ├── ps.php
│   │               │   ├── pt_AO.php
│   │               │   ├── pt_BR.php
│   │               │   ├── pt_CH.php
│   │               │   ├── pt_CV.php
│   │               │   ├── pt_GQ.php
│   │               │   ├── pt_GW.php
│   │               │   ├── pt_LU.php
│   │               │   ├── pt_MO.php
│   │               │   ├── pt_MZ.php
│   │               │   ├── pt.php
│   │               │   ├── pt_PT.php
│   │               │   ├── pt_ST.php
│   │               │   ├── pt_TL.php
│   │               │   ├── qu_BO.php
│   │               │   ├── qu_EC.php
│   │               │   ├── qu.php
│   │               │   ├── quz_PE.php
│   │               │   ├── quz.php
│   │               │   ├── raj_IN.php
│   │               │   ├── raj.php
│   │               │   ├── rm.php
│   │               │   ├── rn.php
│   │               │   ├── rof.php
│   │               │   ├── ro_MD.php
│   │               │   ├── ro.php
│   │               │   ├── ro_RO.php
│   │               │   ├── ru_BY.php
│   │               │   ├── ru_KG.php
│   │               │   ├── ru_KZ.php
│   │               │   ├── ru_MD.php
│   │               │   ├── ru.php
│   │               │   ├── ru_RU.php
│   │               │   ├── ru_UA.php
│   │               │   ├── rwk.php
│   │               │   ├── rw.php
│   │               │   ├── rw_RW.php
│   │               │   ├── sah.php
│   │               │   ├── sah_RU.php
│   │               │   ├── sa_IN.php
│   │               │   ├── sa.php
│   │               │   ├── saq.php
│   │               │   ├── sat_IN.php
│   │               │   ├── sat.php
│   │               │   ├── sbp.php
│   │               │   ├── sc_IT.php
│   │               │   ├── sc.php
│   │               │   ├── sd_IN@devanagari.php
│   │               │   ├── sd_IN.php
│   │               │   ├── sd.php
│   │               │   ├── se_FI.php
│   │               │   ├── seh.php
│   │               │   ├── se_NO.php
│   │               │   ├── se.php
│   │               │   ├── se_SE.php
│   │               │   ├── ses.php
│   │               │   ├── sg.php
│   │               │   ├── sgs_LT.php
│   │               │   ├── sgs.php
│   │               │   ├── shi_Latn.php
│   │               │   ├── shi.php
│   │               │   ├── shi_Tfng.php
│   │               │   ├── shn_MM.php
│   │               │   ├── shn.php
│   │               │   ├── sh.php
│   │               │   ├── shs_CA.php
│   │               │   ├── shs.php
│   │               │   ├── sid_ET.php
│   │               │   ├── sid.php
│   │               │   ├── si_LK.php
│   │               │   ├── si.php
│   │               │   ├── sk.php
│   │               │   ├── sk_SK.php
│   │               │   ├── sl.php
│   │               │   ├── sl_SI.php
│   │               │   ├── smn.php
│   │               │   ├── sm.php
│   │               │   ├── sm_WS.php
│   │               │   ├── sn.php
│   │               │   ├── so_DJ.php
│   │               │   ├── so_ET.php
│   │               │   ├── so_KE.php
│   │               │   ├── so.php
│   │               │   ├── so_SO.php
│   │               │   ├── sq_AL.php
│   │               │   ├── sq_MK.php
│   │               │   ├── sq.php
│   │               │   ├── sq_XK.php
│   │               │   ├── sr_Cyrl_BA.php
│   │               │   ├── sr_Cyrl_ME.php
│   │               │   ├── sr_Cyrl.php
│   │               │   ├── sr_Cyrl_XK.php
│   │               │   ├── sr_Latn_BA.php
│   │               │   ├── sr_Latn_ME.php
│   │               │   ├── sr_Latn.php
│   │               │   ├── sr_Latn_XK.php
│   │               │   ├── sr_ME.php
│   │               │   ├── sr.php
│   │               │   ├── sr_RS@latin.php
│   │               │   ├── sr_RS.php
│   │               │   ├── ss.php
│   │               │   ├── ss_ZA.php
│   │               │   ├── st.php
│   │               │   ├── st_ZA.php
│   │               │   ├── sv_AX.php
│   │               │   ├── sv_FI.php
│   │               │   ├── sv.php
│   │               │   ├── sv_SE.php
│   │               │   ├── sw_CD.php
│   │               │   ├── sw_KE.php
│   │               │   ├── sw.php
│   │               │   ├── sw_TZ.php
│   │               │   ├── sw_UG.php
│   │               │   ├── szl.php
│   │               │   ├── szl_PL.php
│   │               │   ├── ta_IN.php
│   │               │   ├── ta_LK.php
│   │               │   ├── ta_MY.php
│   │               │   ├── ta.php
│   │               │   ├── ta_SG.php
│   │               │   ├── tcy_IN.php
│   │               │   ├── tcy.php
│   │               │   ├── te_IN.php
│   │               │   ├── teo_KE.php
│   │               │   ├── teo.php
│   │               │   ├── te.php
│   │               │   ├── tet.php
│   │               │   ├── tg.php
│   │               │   ├── tg_TJ.php
│   │               │   ├── the_NP.php
│   │               │   ├── the.php
│   │               │   ├── th.php
│   │               │   ├── th_TH.php
│   │               │   ├── ti_ER.php
│   │               │   ├── ti_ET.php
│   │               │   ├── tig_ER.php
│   │               │   ├── tig.php
│   │               │   ├── ti.php
│   │               │   ├── tk.php
│   │               │   ├── tk_TM.php
│   │               │   ├── tlh.php
│   │               │   ├── tl.php
│   │               │   ├── tl_PH.php
│   │               │   ├── tn.php
│   │               │   ├── tn_ZA.php
│   │               │   ├── to.php
│   │               │   ├── to_TO.php
│   │               │   ├── tpi_PG.php
│   │               │   ├── tpi.php
│   │               │   ├── tr_CY.php
│   │               │   ├── tr.php
│   │               │   ├── tr_TR.php
│   │               │   ├── ts.php
│   │               │   ├── ts_ZA.php
│   │               │   ├── tt.php
│   │               │   ├── tt_RU@iqtelif.php
│   │               │   ├── tt_RU.php
│   │               │   ├── twq.php
│   │               │   ├── tzl.php
│   │               │   ├── tzm_Latn.php
│   │               │   ├── tzm.php
│   │               │   ├── ug_CN.php
│   │               │   ├── ug.php
│   │               │   ├── uk.php
│   │               │   ├── uk_UA.php
│   │               │   ├── unm.php
│   │               │   ├── unm_US.php
│   │               │   ├── ur_IN.php
│   │               │   ├── ur.php
│   │               │   ├── ur_PK.php
│   │               │   ├── uz_Arab.php
│   │               │   ├── uz_Cyrl.php
│   │               │   ├── uz_Latn.php
│   │               │   ├── uz.php
│   │               │   ├── uz_UZ@cyrillic.php
│   │               │   ├── uz_UZ.php
│   │               │   ├── vai_Latn.php
│   │               │   ├── vai.php
│   │               │   ├── vai_Vaii.php
│   │               │   ├── ve.php
│   │               │   ├── ve_ZA.php
│   │               │   ├── vi.php
│   │               │   ├── vi_VN.php
│   │               │   ├── vo.php
│   │               │   ├── vun.php
│   │               │   ├── wa_BE.php
│   │               │   ├── wae_CH.php
│   │               │   ├── wae.php
│   │               │   ├── wal_ET.php
│   │               │   ├── wal.php
│   │               │   ├── wa.php
│   │               │   ├── wo.php
│   │               │   ├── wo_SN.php
│   │               │   ├── xh.php
│   │               │   ├── xh_ZA.php
│   │               │   ├── xog.php
│   │               │   ├── yav.php
│   │               │   ├── yi.php
│   │               │   ├── yi_US.php
│   │               │   ├── yo_BJ.php
│   │               │   ├── yo_NG.php
│   │               │   ├── yo.php
│   │               │   ├── yue_Hans.php
│   │               │   ├── yue_Hant.php
│   │               │   ├── yue_HK.php
│   │               │   ├── yue.php
│   │               │   ├── yuw_PG.php
│   │               │   ├── yuw.php
│   │               │   ├── zgh.php
│   │               │   ├── zh_CN.php
│   │               │   ├── zh_Hans_HK.php
│   │               │   ├── zh_Hans_MO.php
│   │               │   ├── zh_Hans.php
│   │               │   ├── zh_Hans_SG.php
│   │               │   ├── zh_Hant_HK.php
│   │               │   ├── zh_Hant_MO.php
│   │               │   ├── zh_Hant.php
│   │               │   ├── zh_Hant_TW.php
│   │               │   ├── zh_HK.php
│   │               │   ├── zh_MO.php
│   │               │   ├── zh.php
│   │               │   ├── zh_SG.php
│   │               │   ├── zh_TW.php
│   │               │   ├── zh_YUE.php
│   │               │   ├── zu.php
│   │               │   └── zu_ZA.php
│   │               ├── Language.php
│   │               ├── Laravel
│   │               │   └── ServiceProvider.php
│   │               ├── List
│   │               │   ├── languages.php
│   │               │   └── regions.php
│   │               ├── MessageFormatter
│   │               │   └── MessageFormatterMapper.php
│   │               ├── PHPStan
│   │               │   ├── AbstractMacro.php
│   │               │   ├── MacroExtension.php
│   │               │   ├── Macro.php
│   │               │   └── MacroScanner.php
│   │               ├── Traits
│   │               │   ├── Boundaries.php
│   │               │   ├── Cast.php
│   │               │   ├── Comparison.php
│   │               │   ├── Converter.php
│   │               │   ├── Creator.php
│   │               │   ├── Date.php
│   │               │   ├── DeprecatedProperties.php
│   │               │   ├── Difference.php
│   │               │   ├── IntervalRounding.php
│   │               │   ├── IntervalStep.php
│   │               │   ├── Localization.php
│   │               │   ├── Macro.php
│   │               │   ├── MagicParameter.php
│   │               │   ├── Mixin.php
│   │               │   ├── Modifiers.php
│   │               │   ├── Mutability.php
│   │               │   ├── ObjectInitialisation.php
│   │               │   ├── Options.php
│   │               │   ├── Rounding.php
│   │               │   ├── Serialization.php
│   │               │   ├── Test.php
│   │               │   ├── Timestamp.php
│   │               │   ├── ToStringFormat.php
│   │               │   ├── Units.php
│   │               │   └── Week.php
│   │               ├── TranslatorImmutable.php
│   │               ├── Translator.php
│   │               └── TranslatorStrongTypeInterface.php
│   ├── nette
│   │   ├── schema
│   │   │   ├── composer.json
│   │   │   ├── license.md
│   │   │   ├── readme.md
│   │   │   └── src
│   │   │       └── Schema
│   │   │           ├── Context.php
│   │   │           ├── DynamicParameter.php
│   │   │           ├── Elements
│   │   │           │   ├── AnyOf.php
│   │   │           │   ├── Base.php
│   │   │           │   ├── Structure.php
│   │   │           │   └── Type.php
│   │   │           ├── Expect.php
│   │   │           ├── Helpers.php
│   │   │           ├── Message.php
│   │   │           ├── Processor.php
│   │   │           ├── Schema.php
│   │   │           └── ValidationException.php
│   │   └── utils
│   │       ├── composer.json
│   │       ├── license.md
│   │       ├── readme.md
│   │       └── src
│   │           ├── compatibility.php
│   │           ├── exceptions.php
│   │           ├── HtmlStringable.php
│   │           ├── Iterators
│   │           │   ├── CachingIterator.php
│   │           │   └── Mapper.php
│   │           ├── SmartObject.php
│   │           ├── StaticClass.php
│   │           ├── Translator.php
│   │           └── Utils
│   │               ├── ArrayHash.php
│   │               ├── ArrayList.php
│   │               ├── Arrays.php
│   │               ├── Callback.php
│   │               ├── DateTime.php
│   │               ├── exceptions.php
│   │               ├── FileInfo.php
│   │               ├── FileSystem.php
│   │               ├── Finder.php
│   │               ├── Floats.php
│   │               ├── Helpers.php
│   │               ├── Html.php
│   │               ├── ImageColor.php
│   │               ├── Image.php
│   │               ├── ImageType.php
│   │               ├── Iterables.php
│   │               ├── Json.php
│   │               ├── ObjectHelpers.php
│   │               ├── Paginator.php
│   │               ├── Random.php
│   │               ├── ReflectionMethod.php
│   │               ├── Reflection.php
│   │               ├── Strings.php
│   │               ├── Type.php
│   │               └── Validators.php
│   ├── nikic
│   │   └── php-parser
│   │       ├── bin
│   │       │   └── php-parse
│   │       ├── composer.json
│   │       ├── lib
│   │       │   └── PhpParser
│   │       │       ├── Builder
│   │       │       │   ├── ClassConst.php
│   │       │       │   ├── Class_.php
│   │       │       │   ├── Declaration.php
│   │       │       │   ├── EnumCase.php
│   │       │       │   ├── Enum_.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Function_.php
│   │       │       │   ├── Interface_.php
│   │       │       │   ├── Method.php
│   │       │       │   ├── Namespace_.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── Property.php
│   │       │       │   ├── Trait_.php
│   │       │       │   ├── TraitUseAdaptation.php
│   │       │       │   ├── TraitUse.php
│   │       │       │   └── Use_.php
│   │       │       ├── BuilderFactory.php
│   │       │       ├── BuilderHelpers.php
│   │       │       ├── Builder.php
│   │       │       ├── Comment
│   │       │       │   └── Doc.php
│   │       │       ├── Comment.php
│   │       │       ├── compatibility_tokens.php
│   │       │       ├── ConstExprEvaluationException.php
│   │       │       ├── ConstExprEvaluator.php
│   │       │       ├── ErrorHandler
│   │       │       │   ├── Collecting.php
│   │       │       │   └── Throwing.php
│   │       │       ├── ErrorHandler.php
│   │       │       ├── Error.php
│   │       │       ├── Internal
│   │       │       │   ├── DiffElem.php
│   │       │       │   ├── Differ.php
│   │       │       │   ├── PrintableNewAnonClassNode.php
│   │       │       │   ├── TokenPolyfill.php
│   │       │       │   └── TokenStream.php
│   │       │       ├── JsonDecoder.php
│   │       │       ├── Lexer
│   │       │       │   ├── Emulative.php
│   │       │       │   └── TokenEmulator
│   │       │       │       ├── AsymmetricVisibilityTokenEmulator.php
│   │       │       │       ├── AttributeEmulator.php
│   │       │       │       ├── EnumTokenEmulator.php
│   │       │       │       ├── ExplicitOctalEmulator.php
│   │       │       │       ├── KeywordEmulator.php
│   │       │       │       ├── MatchTokenEmulator.php
│   │       │       │       ├── NullsafeTokenEmulator.php
│   │       │       │       ├── PropertyTokenEmulator.php
│   │       │       │       ├── ReadonlyFunctionTokenEmulator.php
│   │       │       │       ├── ReadonlyTokenEmulator.php
│   │       │       │       ├── ReverseEmulator.php
│   │       │       │       └── TokenEmulator.php
│   │       │       ├── Lexer.php
│   │       │       ├── Modifiers.php
│   │       │       ├── NameContext.php
│   │       │       ├── Node
│   │       │       │   ├── Arg.php
│   │       │       │   ├── ArrayItem.php
│   │       │       │   ├── AttributeGroup.php
│   │       │       │   ├── Attribute.php
│   │       │       │   ├── ClosureUse.php
│   │       │       │   ├── ComplexType.php
│   │       │       │   ├── Const_.php
│   │       │       │   ├── DeclareItem.php
│   │       │       │   ├── Expr
│   │       │       │   │   ├── ArrayDimFetch.php
│   │       │       │   │   ├── ArrayItem.php
│   │       │       │   │   ├── Array_.php
│   │       │       │   │   ├── ArrowFunction.php
│   │       │       │   │   ├── AssignOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   └── ShiftRight.php
│   │       │       │   │   ├── AssignOp.php
│   │       │       │   │   ├── Assign.php
│   │       │       │   │   ├── AssignRef.php
│   │       │       │   │   ├── BinaryOp
│   │       │       │   │   │   ├── BitwiseAnd.php
│   │       │       │   │   │   ├── BitwiseOr.php
│   │       │       │   │   │   ├── BitwiseXor.php
│   │       │       │   │   │   ├── BooleanAnd.php
│   │       │       │   │   │   ├── BooleanOr.php
│   │       │       │   │   │   ├── Coalesce.php
│   │       │       │   │   │   ├── Concat.php
│   │       │       │   │   │   ├── Div.php
│   │       │       │   │   │   ├── Equal.php
│   │       │       │   │   │   ├── GreaterOrEqual.php
│   │       │       │   │   │   ├── Greater.php
│   │       │       │   │   │   ├── Identical.php
│   │       │       │   │   │   ├── LogicalAnd.php
│   │       │       │   │   │   ├── LogicalOr.php
│   │       │       │   │   │   ├── LogicalXor.php
│   │       │       │   │   │   ├── Minus.php
│   │       │       │   │   │   ├── Mod.php
│   │       │       │   │   │   ├── Mul.php
│   │       │       │   │   │   ├── NotEqual.php
│   │       │       │   │   │   ├── NotIdentical.php
│   │       │       │   │   │   ├── Plus.php
│   │       │       │   │   │   ├── Pow.php
│   │       │       │   │   │   ├── ShiftLeft.php
│   │       │       │   │   │   ├── ShiftRight.php
│   │       │       │   │   │   ├── SmallerOrEqual.php
│   │       │       │   │   │   ├── Smaller.php
│   │       │       │   │   │   └── Spaceship.php
│   │       │       │   │   ├── BinaryOp.php
│   │       │       │   │   ├── BitwiseNot.php
│   │       │       │   │   ├── BooleanNot.php
│   │       │       │   │   ├── CallLike.php
│   │       │       │   │   ├── Cast
│   │       │       │   │   │   ├── Array_.php
│   │       │       │   │   │   ├── Bool_.php
│   │       │       │   │   │   ├── Double.php
│   │       │       │   │   │   ├── Int_.php
│   │       │       │   │   │   ├── Object_.php
│   │       │       │   │   │   ├── String_.php
│   │       │       │   │   │   └── Unset_.php
│   │       │       │   │   ├── Cast.php
│   │       │       │   │   ├── ClassConstFetch.php
│   │       │       │   │   ├── Clone_.php
│   │       │       │   │   ├── Closure.php
│   │       │       │   │   ├── ClosureUse.php
│   │       │       │   │   ├── ConstFetch.php
│   │       │       │   │   ├── Empty_.php
│   │       │       │   │   ├── Error.php
│   │       │       │   │   ├── ErrorSuppress.php
│   │       │       │   │   ├── Eval_.php
│   │       │       │   │   ├── Exit_.php
│   │       │       │   │   ├── FuncCall.php
│   │       │       │   │   ├── Include_.php
│   │       │       │   │   ├── Instanceof_.php
│   │       │       │   │   ├── Isset_.php
│   │       │       │   │   ├── List_.php
│   │       │       │   │   ├── Match_.php
│   │       │       │   │   ├── MethodCall.php
│   │       │       │   │   ├── New_.php
│   │       │       │   │   ├── NullsafeMethodCall.php
│   │       │       │   │   ├── NullsafePropertyFetch.php
│   │       │       │   │   ├── PostDec.php
│   │       │       │   │   ├── PostInc.php
│   │       │       │   │   ├── PreDec.php
│   │       │       │   │   ├── PreInc.php
│   │       │       │   │   ├── Print_.php
│   │       │       │   │   ├── PropertyFetch.php
│   │       │       │   │   ├── ShellExec.php
│   │       │       │   │   ├── StaticCall.php
│   │       │       │   │   ├── StaticPropertyFetch.php
│   │       │       │   │   ├── Ternary.php
│   │       │       │   │   ├── Throw_.php
│   │       │       │   │   ├── UnaryMinus.php
│   │       │       │   │   ├── UnaryPlus.php
│   │       │       │   │   ├── Variable.php
│   │       │       │   │   ├── YieldFrom.php
│   │       │       │   │   └── Yield_.php
│   │       │       │   ├── Expr.php
│   │       │       │   ├── FunctionLike.php
│   │       │       │   ├── Identifier.php
│   │       │       │   ├── InterpolatedStringPart.php
│   │       │       │   ├── IntersectionType.php
│   │       │       │   ├── MatchArm.php
│   │       │       │   ├── Name
│   │       │       │   │   ├── FullyQualified.php
│   │       │       │   │   └── Relative.php
│   │       │       │   ├── Name.php
│   │       │       │   ├── NullableType.php
│   │       │       │   ├── Param.php
│   │       │       │   ├── PropertyHook.php
│   │       │       │   ├── PropertyItem.php
│   │       │       │   ├── Scalar
│   │       │       │   │   ├── DNumber.php
│   │       │       │   │   ├── Encapsed.php
│   │       │       │   │   ├── EncapsedStringPart.php
│   │       │       │   │   ├── Float_.php
│   │       │       │   │   ├── InterpolatedString.php
│   │       │       │   │   ├── Int_.php
│   │       │       │   │   ├── LNumber.php
│   │       │       │   │   ├── MagicConst
│   │       │       │   │   │   ├── Class_.php
│   │       │       │   │   │   ├── Dir.php
│   │       │       │   │   │   ├── File.php
│   │       │       │   │   │   ├── Function_.php
│   │       │       │   │   │   ├── Line.php
│   │       │       │   │   │   ├── Method.php
│   │       │       │   │   │   ├── Namespace_.php
│   │       │       │   │   │   ├── Property.php
│   │       │       │   │   │   └── Trait_.php
│   │       │       │   │   ├── MagicConst.php
│   │       │       │   │   └── String_.php
│   │       │       │   ├── Scalar.php
│   │       │       │   ├── StaticVar.php
│   │       │       │   ├── Stmt
│   │       │       │   │   ├── Block.php
│   │       │       │   │   ├── Break_.php
│   │       │       │   │   ├── Case_.php
│   │       │       │   │   ├── Catch_.php
│   │       │       │   │   ├── ClassConst.php
│   │       │       │   │   ├── ClassLike.php
│   │       │       │   │   ├── ClassMethod.php
│   │       │       │   │   ├── Class_.php
│   │       │       │   │   ├── Const_.php
│   │       │       │   │   ├── Continue_.php
│   │       │       │   │   ├── DeclareDeclare.php
│   │       │       │   │   ├── Declare_.php
│   │       │       │   │   ├── Do_.php
│   │       │       │   │   ├── Echo_.php
│   │       │       │   │   ├── ElseIf_.php
│   │       │       │   │   ├── Else_.php
│   │       │       │   │   ├── EnumCase.php
│   │       │       │   │   ├── Enum_.php
│   │       │       │   │   ├── Expression.php
│   │       │       │   │   ├── Finally_.php
│   │       │       │   │   ├── Foreach_.php
│   │       │       │   │   ├── For_.php
│   │       │       │   │   ├── Function_.php
│   │       │       │   │   ├── Global_.php
│   │       │       │   │   ├── Goto_.php
│   │       │       │   │   ├── GroupUse.php
│   │       │       │   │   ├── HaltCompiler.php
│   │       │       │   │   ├── If_.php
│   │       │       │   │   ├── InlineHTML.php
│   │       │       │   │   ├── Interface_.php
│   │       │       │   │   ├── Label.php
│   │       │       │   │   ├── Namespace_.php
│   │       │       │   │   ├── Nop.php
│   │       │       │   │   ├── Property.php
│   │       │       │   │   ├── PropertyProperty.php
│   │       │       │   │   ├── Return_.php
│   │       │       │   │   ├── Static_.php
│   │       │       │   │   ├── StaticVar.php
│   │       │       │   │   ├── Switch_.php
│   │       │       │   │   ├── Trait_.php
│   │       │       │   │   ├── TraitUseAdaptation
│   │       │       │   │   │   ├── Alias.php
│   │       │       │   │   │   └── Precedence.php
│   │       │       │   │   ├── TraitUseAdaptation.php
│   │       │       │   │   ├── TraitUse.php
│   │       │       │   │   ├── TryCatch.php
│   │       │       │   │   ├── Unset_.php
│   │       │       │   │   ├── Use_.php
│   │       │       │   │   ├── UseUse.php
│   │       │       │   │   └── While_.php
│   │       │       │   ├── Stmt.php
│   │       │       │   ├── UnionType.php
│   │       │       │   ├── UseItem.php
│   │       │       │   ├── VariadicPlaceholder.php
│   │       │       │   └── VarLikeIdentifier.php
│   │       │       ├── NodeAbstract.php
│   │       │       ├── NodeDumper.php
│   │       │       ├── NodeFinder.php
│   │       │       ├── Node.php
│   │       │       ├── NodeTraverserInterface.php
│   │       │       ├── NodeTraverser.php
│   │       │       ├── NodeVisitor
│   │       │       │   ├── CloningVisitor.php
│   │       │       │   ├── CommentAnnotatingVisitor.php
│   │       │       │   ├── FindingVisitor.php
│   │       │       │   ├── FirstFindingVisitor.php
│   │       │       │   ├── NameResolver.php
│   │       │       │   ├── NodeConnectingVisitor.php
│   │       │       │   └── ParentConnectingVisitor.php
│   │       │       ├── NodeVisitorAbstract.php
│   │       │       ├── NodeVisitor.php
│   │       │       ├── Parser
│   │       │       │   ├── Php7.php
│   │       │       │   └── Php8.php
│   │       │       ├── ParserAbstract.php
│   │       │       ├── ParserFactory.php
│   │       │       ├── Parser.php
│   │       │       ├── PhpVersion.php
│   │       │       ├── PrettyPrinter
│   │       │       │   └── Standard.php
│   │       │       ├── PrettyPrinterAbstract.php
│   │       │       ├── PrettyPrinter.php
│   │       │       └── Token.php
│   │       ├── LICENSE
│   │       └── README.md
│   ├── nunomaduro
│   │   ├── collision
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Adapters
│   │   │       │   ├── Laravel
│   │   │       │   │   ├── CollisionServiceProvider.php
│   │   │       │   │   ├── Commands
│   │   │       │   │   │   └── TestCommand.php
│   │   │       │   │   ├── ExceptionHandler.php
│   │   │       │   │   ├── Exceptions
│   │   │       │   │   │   ├── NotSupportedYetException.php
│   │   │       │   │   │   └── RequirementsException.php
│   │   │       │   │   ├── IgnitionSolutionsRepository.php
│   │   │       │   │   └── Inspector.php
│   │   │       │   └── Phpunit
│   │   │       │       ├── Autoload.php
│   │   │       │       ├── ConfigureIO.php
│   │   │       │       ├── Printers
│   │   │       │       │   ├── DefaultPrinter.php
│   │   │       │       │   └── ReportablePrinter.php
│   │   │       │       ├── State.php
│   │   │       │       ├── Style.php
│   │   │       │       ├── Subscribers
│   │   │       │       │   ├── EnsurePrinterIsRegisteredSubscriber.php
│   │   │       │       │   └── Subscriber.php
│   │   │       │       ├── Support
│   │   │       │       │   └── ResultReflection.php
│   │   │       │       └── TestResult.php
│   │   │       ├── ArgumentFormatter.php
│   │   │       ├── ConsoleColor.php
│   │   │       ├── Contracts
│   │   │       │   ├── Adapters
│   │   │       │   │   └── Phpunit
│   │   │       │   │       └── HasPrintableTestCaseName.php
│   │   │       │   ├── RenderableOnCollisionEditor.php
│   │   │       │   ├── RenderlessEditor.php
│   │   │       │   ├── RenderlessTrace.php
│   │   │       │   └── SolutionsRepository.php
│   │   │       ├── Coverage.php
│   │   │       ├── Exceptions
│   │   │       │   ├── InvalidStyleException.php
│   │   │       │   ├── ShouldNotHappen.php
│   │   │       │   ├── TestException.php
│   │   │       │   └── TestOutcome.php
│   │   │       ├── Handler.php
│   │   │       ├── Highlighter.php
│   │   │       ├── Provider.php
│   │   │       ├── SolutionsRepositories
│   │   │       │   └── NullSolutionsRepository.php
│   │   │       └── Writer.php
│   │   └── termwind
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── pint.json
│   │       ├── playground.php
│   │       └── src
│   │           ├── Actions
│   │           │   └── StyleToMethod.php
│   │           ├── Components
│   │           │   ├── Anchor.php
│   │           │   ├── BreakLine.php
│   │           │   ├── Dd.php
│   │           │   ├── Div.php
│   │           │   ├── Dl.php
│   │           │   ├── Dt.php
│   │           │   ├── Element.php
│   │           │   ├── Hr.php
│   │           │   ├── Li.php
│   │           │   ├── Ol.php
│   │           │   ├── Paragraph.php
│   │           │   ├── Raw.php
│   │           │   ├── Span.php
│   │           │   └── Ul.php
│   │           ├── Enums
│   │           │   └── Color.php
│   │           ├── Exceptions
│   │           │   ├── ColorNotFound.php
│   │           │   ├── InvalidChild.php
│   │           │   ├── InvalidColor.php
│   │           │   ├── InvalidStyle.php
│   │           │   └── StyleNotFound.php
│   │           ├── Functions.php
│   │           ├── Helpers
│   │           │   └── QuestionHelper.php
│   │           ├── Html
│   │           │   ├── CodeRenderer.php
│   │           │   ├── InheritStyles.php
│   │           │   ├── PreRenderer.php
│   │           │   └── TableRenderer.php
│   │           ├── HtmlRenderer.php
│   │           ├── Laravel
│   │           │   └── TermwindServiceProvider.php
│   │           ├── Question.php
│   │           ├── Repositories
│   │           │   └── Styles.php
│   │           ├── Terminal.php
│   │           ├── Termwind.php
│   │           └── ValueObjects
│   │               ├── Node.php
│   │               ├── Style.php
│   │               └── Styles.php
│   ├── phar-io
│   │   ├── manifest
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── composer.lock
│   │   │   ├── LICENSE
│   │   │   ├── manifest.xsd
│   │   │   ├── README.md
│   │   │   ├── src
│   │   │   │   ├── exceptions
│   │   │   │   │   ├── ElementCollectionException.php
│   │   │   │   │   ├── Exception.php
│   │   │   │   │   ├── InvalidApplicationNameException.php
│   │   │   │   │   ├── InvalidEmailException.php
│   │   │   │   │   ├── InvalidUrlException.php
│   │   │   │   │   ├── ManifestDocumentException.php
│   │   │   │   │   ├── ManifestDocumentLoadingException.php
│   │   │   │   │   ├── ManifestDocumentMapperException.php
│   │   │   │   │   ├── ManifestElementException.php
│   │   │   │   │   ├── ManifestLoaderException.php
│   │   │   │   │   └── NoEmailAddressException.php
│   │   │   │   ├── ManifestDocumentMapper.php
│   │   │   │   ├── ManifestLoader.php
│   │   │   │   ├── ManifestSerializer.php
│   │   │   │   ├── values
│   │   │   │   │   ├── ApplicationName.php
│   │   │   │   │   ├── Application.php
│   │   │   │   │   ├── AuthorCollectionIterator.php
│   │   │   │   │   ├── AuthorCollection.php
│   │   │   │   │   ├── Author.php
│   │   │   │   │   ├── BundledComponentCollectionIterator.php
│   │   │   │   │   ├── BundledComponentCollection.php
│   │   │   │   │   ├── BundledComponent.php
│   │   │   │   │   ├── CopyrightInformation.php
│   │   │   │   │   ├── Email.php
│   │   │   │   │   ├── Extension.php
│   │   │   │   │   ├── Library.php
│   │   │   │   │   ├── License.php
│   │   │   │   │   ├── Manifest.php
│   │   │   │   │   ├── PhpExtensionRequirement.php
│   │   │   │   │   ├── PhpVersionRequirement.php
│   │   │   │   │   ├── RequirementCollectionIterator.php
│   │   │   │   │   ├── RequirementCollection.php
│   │   │   │   │   ├── Requirement.php
│   │   │   │   │   ├── Type.php
│   │   │   │   │   └── Url.php
│   │   │   │   └── xml
│   │   │   │       ├── AuthorElementCollection.php
│   │   │   │       ├── AuthorElement.php
│   │   │   │       ├── BundlesElement.php
│   │   │   │       ├── ComponentElementCollection.php
│   │   │   │       ├── ComponentElement.php
│   │   │   │       ├── ContainsElement.php
│   │   │   │       ├── CopyrightElement.php
│   │   │   │       ├── ElementCollection.php
│   │   │   │       ├── ExtElementCollection.php
│   │   │   │       ├── ExtElement.php
│   │   │   │       ├── ExtensionElement.php
│   │   │   │       ├── LicenseElement.php
│   │   │   │       ├── ManifestDocument.php
│   │   │   │       ├── ManifestElement.php
│   │   │   │       ├── PhpElement.php
│   │   │   │       └── RequiresElement.php
│   │   │   └── tools
│   │   │       └── php-cs-fixer.d
│   │   │           ├── header.txt
│   │   │           └── PhpdocSingleLineVarFixer.php
│   │   └── version
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── BuildMetaData.php
│   │           ├── constraints
│   │           │   ├── AbstractVersionConstraint.php
│   │           │   ├── AndVersionConstraintGroup.php
│   │           │   ├── AnyVersionConstraint.php
│   │           │   ├── ExactVersionConstraint.php
│   │           │   ├── GreaterThanOrEqualToVersionConstraint.php
│   │           │   ├── OrVersionConstraintGroup.php
│   │           │   ├── SpecificMajorAndMinorVersionConstraint.php
│   │           │   ├── SpecificMajorVersionConstraint.php
│   │           │   └── VersionConstraint.php
│   │           ├── exceptions
│   │           │   ├── Exception.php
│   │           │   ├── InvalidPreReleaseSuffixException.php
│   │           │   ├── InvalidVersionException.php
│   │           │   ├── NoBuildMetaDataException.php
│   │           │   ├── NoPreReleaseSuffixException.php
│   │           │   └── UnsupportedVersionConstraintException.php
│   │           ├── PreReleaseSuffix.php
│   │           ├── VersionConstraintParser.php
│   │           ├── VersionConstraintValue.php
│   │           ├── VersionNumber.php
│   │           └── Version.php
│   ├── phpoption
│   │   └── phpoption
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── src
│   │           └── PhpOption
│   │               ├── LazyOption.php
│   │               ├── None.php
│   │               ├── Option.php
│   │               └── Some.php
│   ├── phpunit
│   │   ├── php-code-coverage
│   │   │   ├── ChangeLog-10.1.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── CodeCoverage.php
│   │   │       ├── Data
│   │   │       │   ├── ProcessedCodeCoverageData.php
│   │   │       │   └── RawCodeCoverageData.php
│   │   │       ├── Driver
│   │   │       │   ├── Driver.php
│   │   │       │   ├── PcovDriver.php
│   │   │       │   ├── Selector.php
│   │   │       │   └── XdebugDriver.php
│   │   │       ├── Exception
│   │   │       │   ├── BranchAndPathCoverageNotSupportedException.php
│   │   │       │   ├── DeadCodeDetectionNotSupportedException.php
│   │   │       │   ├── DirectoryCouldNotBeCreatedException.php
│   │   │       │   ├── Exception.php
│   │   │       │   ├── FileCouldNotBeWrittenException.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   ├── NoCodeCoverageDriverAvailableException.php
│   │   │       │   ├── NoCodeCoverageDriverWithPathCoverageSupportAvailableException.php
│   │   │       │   ├── ParserException.php
│   │   │       │   ├── PathExistsButIsNotDirectoryException.php
│   │   │       │   ├── PcovNotAvailableException.php
│   │   │       │   ├── ReflectionException.php
│   │   │       │   ├── ReportAlreadyFinalizedException.php
│   │   │       │   ├── StaticAnalysisCacheNotConfiguredException.php
│   │   │       │   ├── TestIdMissingException.php
│   │   │       │   ├── UnintentionallyCoveredCodeException.php
│   │   │       │   ├── WriteOperationFailedException.php
│   │   │       │   ├── XdebugNotAvailableException.php
│   │   │       │   ├── XdebugNotEnabledException.php
│   │   │       │   └── XmlException.php
│   │   │       ├── Filter.php
│   │   │       ├── Node
│   │   │       │   ├── AbstractNode.php
│   │   │       │   ├── Builder.php
│   │   │       │   ├── CrapIndex.php
│   │   │       │   ├── Directory.php
│   │   │       │   ├── File.php
│   │   │       │   └── Iterator.php
│   │   │       ├── Report
│   │   │       │   ├── Clover.php
│   │   │       │   ├── Cobertura.php
│   │   │       │   ├── Crap4j.php
│   │   │       │   ├── Html
│   │   │       │   │   ├── Colors.php
│   │   │       │   │   ├── CustomCssFile.php
│   │   │       │   │   ├── Facade.php
│   │   │       │   │   ├── Renderer
│   │   │       │   │   │   ├── Dashboard.php
│   │   │       │   │   │   ├── Directory.php
│   │   │       │   │   │   ├── File.php
│   │   │       │   │   │   └── Template
│   │   │       │   │   │       ├── branches.html.dist
│   │   │       │   │   │       ├── coverage_bar_branch.html.dist
│   │   │       │   │   │       ├── coverage_bar.html.dist
│   │   │       │   │   │       ├── css
│   │   │       │   │   │       │   ├── bootstrap.min.css
│   │   │       │   │   │       │   ├── custom.css
│   │   │       │   │   │       │   ├── nv.d3.min.css
│   │   │       │   │   │       │   ├── octicons.css
│   │   │       │   │   │       │   └── style.css
│   │   │       │   │   │       ├── dashboard_branch.html.dist
│   │   │       │   │   │       ├── dashboard.html.dist
│   │   │       │   │   │       ├── directory_branch.html.dist
│   │   │       │   │   │       ├── directory.html.dist
│   │   │       │   │   │       ├── directory_item_branch.html.dist
│   │   │       │   │   │       ├── directory_item.html.dist
│   │   │       │   │   │       ├── file_branch.html.dist
│   │   │       │   │   │       ├── file.html.dist
│   │   │       │   │   │       ├── file_item_branch.html.dist
│   │   │       │   │   │       ├── file_item.html.dist
│   │   │       │   │   │       ├── icons
│   │   │       │   │   │       │   ├── file-code.svg
│   │   │       │   │   │       │   └── file-directory.svg
│   │   │       │   │   │       ├── js
│   │   │       │   │   │       │   ├── bootstrap.min.js
│   │   │       │   │   │       │   ├── d3.min.js
│   │   │       │   │   │       │   ├── file.js
│   │   │       │   │   │       │   ├── jquery.min.js
│   │   │       │   │   │       │   ├── nv.d3.min.js
│   │   │       │   │   │       │   └── popper.min.js
│   │   │       │   │   │       ├── line.html.dist
│   │   │       │   │   │       ├── lines.html.dist
│   │   │       │   │   │       ├── method_item_branch.html.dist
│   │   │       │   │   │       ├── method_item.html.dist
│   │   │       │   │   │       └── paths.html.dist
│   │   │       │   │   └── Renderer.php
│   │   │       │   ├── PHP.php
│   │   │       │   ├── Text.php
│   │   │       │   ├── Thresholds.php
│   │   │       │   └── Xml
│   │   │       │       ├── BuildInformation.php
│   │   │       │       ├── Coverage.php
│   │   │       │       ├── Directory.php
│   │   │       │       ├── Facade.php
│   │   │       │       ├── File.php
│   │   │       │       ├── Method.php
│   │   │       │       ├── Node.php
│   │   │       │       ├── Project.php
│   │   │       │       ├── Report.php
│   │   │       │       ├── Source.php
│   │   │       │       ├── Tests.php
│   │   │       │       ├── Totals.php
│   │   │       │       └── Unit.php
│   │   │       ├── StaticAnalysis
│   │   │       │   ├── CacheWarmer.php
│   │   │       │   ├── CachingFileAnalyser.php
│   │   │       │   ├── CodeUnitFindingVisitor.php
│   │   │       │   ├── ExecutableLinesFindingVisitor.php
│   │   │       │   ├── FileAnalyser.php
│   │   │       │   ├── IgnoredLinesFindingVisitor.php
│   │   │       │   └── ParsingFileAnalyser.php
│   │   │       ├── TestSize
│   │   │       │   ├── Known.php
│   │   │       │   ├── Large.php
│   │   │       │   ├── Medium.php
│   │   │       │   ├── Small.php
│   │   │       │   ├── TestSize.php
│   │   │       │   └── Unknown.php
│   │   │       ├── TestStatus
│   │   │       │   ├── Failure.php
│   │   │       │   ├── Known.php
│   │   │       │   ├── Success.php
│   │   │       │   ├── TestStatus.php
│   │   │       │   └── Unknown.php
│   │   │       ├── Util
│   │   │       │   ├── Filesystem.php
│   │   │       │   └── Percentage.php
│   │   │       └── Version.php
│   │   ├── php-file-iterator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ExcludeIterator.php
│   │   │       ├── Facade.php
│   │   │       ├── Factory.php
│   │   │       └── Iterator.php
│   │   ├── php-invoker
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── ProcessControlExtensionNotLoadedException.php
│   │   │       │   └── TimeoutException.php
│   │   │       └── Invoker.php
│   │   ├── php-text-template
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   └── RuntimeException.php
│   │   │       └── Template.php
│   │   ├── php-timer
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Duration.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── NoActiveTimerException.php
│   │   │       │   └── TimeSinceStartOfRequestNotAvailableException.php
│   │   │       ├── ResourceUsageFormatter.php
│   │   │       └── Timer.php
│   │   └── phpunit
│   │       ├── ChangeLog-10.5.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── DEPRECATIONS.md
│   │       ├── LICENSE
│   │       ├── phpunit
│   │       ├── phpunit.xsd
│   │       ├── README.md
│   │       ├── schema
│   │       │   ├── 10.0.xsd
│   │       │   ├── 10.1.xsd
│   │       │   ├── 10.2.xsd
│   │       │   ├── 10.3.xsd
│   │       │   ├── 10.4.xsd
│   │       │   ├── 8.5.xsd
│   │       │   ├── 9.0.xsd
│   │       │   ├── 9.1.xsd
│   │       │   ├── 9.2.xsd
│   │       │   ├── 9.3.xsd
│   │       │   ├── 9.4.xsd
│   │       │   └── 9.5.xsd
│   │       ├── SECURITY.md
│   │       └── src
│   │           ├── Event
│   │           │   ├── Dispatcher
│   │           │   │   ├── CollectingDispatcher.php
│   │           │   │   ├── DeferringDispatcher.php
│   │           │   │   ├── DirectDispatcher.php
│   │           │   │   ├── Dispatcher.php
│   │           │   │   └── SubscribableDispatcher.php
│   │           │   ├── Emitter
│   │           │   │   ├── DispatchingEmitter.php
│   │           │   │   └── Emitter.php
│   │           │   ├── Events
│   │           │   │   ├── Application
│   │           │   │   │   ├── Finished.php
│   │           │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   ├── Started.php
│   │           │   │   │   └── StartedSubscriber.php
│   │           │   │   ├── EventCollectionIterator.php
│   │           │   │   ├── EventCollection.php
│   │           │   │   ├── Event.php
│   │           │   │   ├── Test
│   │           │   │   │   ├── Assertion
│   │           │   │   │   │   ├── AssertionFailed.php
│   │           │   │   │   │   ├── AssertionFailedSubscriber.php
│   │           │   │   │   │   ├── AssertionSucceeded.php
│   │           │   │   │   │   └── AssertionSucceededSubscriber.php
│   │           │   │   │   ├── ComparatorRegistered.php
│   │           │   │   │   ├── ComparatorRegisteredSubscriber.php
│   │           │   │   │   ├── HookMethod
│   │           │   │   │   │   ├── AfterLastTestMethodCalled.php
│   │           │   │   │   │   ├── AfterLastTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── AfterLastTestMethodFinished.php
│   │           │   │   │   │   ├── AfterLastTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── AfterTestMethodCalled.php
│   │           │   │   │   │   ├── AfterTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── AfterTestMethodFinished.php
│   │           │   │   │   │   ├── AfterTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodCalled.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodErrored.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodErroredSubscriber.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodFinished.php
│   │           │   │   │   │   ├── BeforeFirstTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── BeforeTestMethodCalled.php
│   │           │   │   │   │   ├── BeforeTestMethodCalledSubscriber.php
│   │           │   │   │   │   ├── BeforeTestMethodFinished.php
│   │           │   │   │   │   ├── BeforeTestMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── PostConditionCalled.php
│   │           │   │   │   │   ├── PostConditionCalledSubscriber.php
│   │           │   │   │   │   ├── PostConditionFinished.php
│   │           │   │   │   │   ├── PostConditionFinishedSubscriber.php
│   │           │   │   │   │   ├── PreConditionCalled.php
│   │           │   │   │   │   ├── PreConditionCalledSubscriber.php
│   │           │   │   │   │   ├── PreConditionFinished.php
│   │           │   │   │   │   └── PreConditionFinishedSubscriber.php
│   │           │   │   │   ├── Issue
│   │           │   │   │   │   ├── ConsideredRisky.php
│   │           │   │   │   │   ├── ConsideredRiskySubscriber.php
│   │           │   │   │   │   ├── DeprecationTriggered.php
│   │           │   │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── ErrorTriggered.php
│   │           │   │   │   │   ├── ErrorTriggeredSubscriber.php
│   │           │   │   │   │   ├── NoticeTriggered.php
│   │           │   │   │   │   ├── NoticeTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpDeprecationTriggered.php
│   │           │   │   │   │   ├── PhpDeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpNoticeTriggered.php
│   │           │   │   │   │   ├── PhpNoticeTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitDeprecationTriggered.php
│   │           │   │   │   │   ├── PhpunitDeprecationTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitErrorTriggered.php
│   │           │   │   │   │   ├── PhpunitErrorTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpunitWarningTriggered.php
│   │           │   │   │   │   ├── PhpunitWarningTriggeredSubscriber.php
│   │           │   │   │   │   ├── PhpWarningTriggered.php
│   │           │   │   │   │   ├── PhpWarningTriggeredSubscriber.php
│   │           │   │   │   │   ├── WarningTriggered.php
│   │           │   │   │   │   └── WarningTriggeredSubscriber.php
│   │           │   │   │   ├── Lifecycle
│   │           │   │   │   │   ├── DataProviderMethodCalled.php
│   │           │   │   │   │   ├── DataProviderMethodCalledSubscriber.php
│   │           │   │   │   │   ├── DataProviderMethodFinished.php
│   │           │   │   │   │   ├── DataProviderMethodFinishedSubscriber.php
│   │           │   │   │   │   ├── Finished.php
│   │           │   │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   │   ├── PreparationFailed.php
│   │           │   │   │   │   ├── PreparationFailedSubscriber.php
│   │           │   │   │   │   ├── PreparationStarted.php
│   │           │   │   │   │   ├── PreparationStartedSubscriber.php
│   │           │   │   │   │   ├── Prepared.php
│   │           │   │   │   │   └── PreparedSubscriber.php
│   │           │   │   │   ├── Outcome
│   │           │   │   │   │   ├── Errored.php
│   │           │   │   │   │   ├── ErroredSubscriber.php
│   │           │   │   │   │   ├── Failed.php
│   │           │   │   │   │   ├── FailedSubscriber.php
│   │           │   │   │   │   ├── MarkedIncomplete.php
│   │           │   │   │   │   ├── MarkedIncompleteSubscriber.php
│   │           │   │   │   │   ├── Passed.php
│   │           │   │   │   │   ├── PassedSubscriber.php
│   │           │   │   │   │   ├── Skipped.php
│   │           │   │   │   │   └── SkippedSubscriber.php
│   │           │   │   │   ├── PrintedUnexpectedOutput.php
│   │           │   │   │   ├── PrintedUnexpectedOutputSubscriber.php
│   │           │   │   │   └── TestDouble
│   │           │   │   │       ├── MockObjectCreated.php
│   │           │   │   │       ├── MockObjectCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForAbstractClassCreated.php
│   │           │   │   │       ├── MockObjectForAbstractClassCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreated.php
│   │           │   │   │       ├── MockObjectForIntersectionOfInterfacesCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectForTraitCreated.php
│   │           │   │   │       ├── MockObjectForTraitCreatedSubscriber.php
│   │           │   │   │       ├── MockObjectFromWsdlCreated.php
│   │           │   │   │       ├── MockObjectFromWsdlCreatedSubscriber.php
│   │           │   │   │       ├── PartialMockObjectCreated.php
│   │           │   │   │       ├── PartialMockObjectCreatedSubscriber.php
│   │           │   │   │       ├── TestProxyCreated.php
│   │           │   │   │       ├── TestProxyCreatedSubscriber.php
│   │           │   │   │       ├── TestStubCreated.php
│   │           │   │   │       ├── TestStubCreatedSubscriber.php
│   │           │   │   │       ├── TestStubForIntersectionOfInterfacesCreated.php
│   │           │   │   │       └── TestStubForIntersectionOfInterfacesCreatedSubscriber.php
│   │           │   │   ├── TestRunner
│   │           │   │   │   ├── BootstrapFinished.php
│   │           │   │   │   ├── BootstrapFinishedSubscriber.php
│   │           │   │   │   ├── Configured.php
│   │           │   │   │   ├── ConfiguredSubscriber.php
│   │           │   │   │   ├── DeprecationTriggered.php
│   │           │   │   │   ├── DeprecationTriggeredSubscriber.php
│   │           │   │   │   ├── EventFacadeSealed.php
│   │           │   │   │   ├── EventFacadeSealedSubscriber.php
│   │           │   │   │   ├── ExecutionAborted.php
│   │           │   │   │   ├── ExecutionAbortedSubscriber.php
│   │           │   │   │   ├── ExecutionFinished.php
│   │           │   │   │   ├── ExecutionFinishedSubscriber.php
│   │           │   │   │   ├── ExecutionStarted.php
│   │           │   │   │   ├── ExecutionStartedSubscriber.php
│   │           │   │   │   ├── ExtensionBootstrapped.php
│   │           │   │   │   ├── ExtensionBootstrappedSubscriber.php
│   │           │   │   │   ├── ExtensionLoadedFromPhar.php
│   │           │   │   │   ├── ExtensionLoadedFromPharSubscriber.php
│   │           │   │   │   ├── Finished.php
│   │           │   │   │   ├── FinishedSubscriber.php
│   │           │   │   │   ├── GarbageCollectionDisabled.php
│   │           │   │   │   ├── GarbageCollectionDisabledSubscriber.php
│   │           │   │   │   ├── GarbageCollectionEnabled.php
│   │           │   │   │   ├── GarbageCollectionEnabledSubscriber.php
│   │           │   │   │   ├── GarbageCollectionTriggered.php
│   │           │   │   │   ├── GarbageCollectionTriggeredSubscriber.php
│   │           │   │   │   ├── Started.php
│   │           │   │   │   ├── StartedSubscriber.php
│   │           │   │   │   ├── WarningTriggered.php
│   │           │   │   │   └── WarningTriggeredSubscriber.php
│   │           │   │   └── TestSuite
│   │           │   │       ├── Filtered.php
│   │           │   │       ├── FilteredSubscriber.php
│   │           │   │       ├── Finished.php
│   │           │   │       ├── FinishedSubscriber.php
│   │           │   │       ├── Loaded.php
│   │           │   │       ├── LoadedSubscriber.php
│   │           │   │       ├── Skipped.php
│   │           │   │       ├── SkippedSubscriber.php
│   │           │   │       ├── Sorted.php
│   │           │   │       ├── SortedSubscriber.php
│   │           │   │       ├── Started.php
│   │           │   │       └── StartedSubscriber.php
│   │           │   ├── Exception
│   │           │   │   ├── EventAlreadyAssignedException.php
│   │           │   │   ├── EventFacadeIsSealedException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidArgumentException.php
│   │           │   │   ├── InvalidEventException.php
│   │           │   │   ├── InvalidSubscriberException.php
│   │           │   │   ├── MapError.php
│   │           │   │   ├── MoreThanOneDataSetFromDataProviderException.php
│   │           │   │   ├── NoComparisonFailureException.php
│   │           │   │   ├── NoDataSetFromDataProviderException.php
│   │           │   │   ├── NoPreviousThrowableException.php
│   │           │   │   ├── NoTestCaseObjectOnCallStackException.php
│   │           │   │   ├── RuntimeException.php
│   │           │   │   ├── SubscriberTypeAlreadyRegisteredException.php
│   │           │   │   ├── UnknownEventException.php
│   │           │   │   ├── UnknownEventTypeException.php
│   │           │   │   ├── UnknownSubscriberException.php
│   │           │   │   └── UnknownSubscriberTypeException.php
│   │           │   ├── Facade.php
│   │           │   ├── Subscriber.php
│   │           │   ├── Tracer.php
│   │           │   ├── TypeMap.php
│   │           │   └── Value
│   │           │       ├── ClassMethod.php
│   │           │       ├── ComparisonFailureBuilder.php
│   │           │       ├── ComparisonFailure.php
│   │           │       ├── Runtime
│   │           │       │   ├── OperatingSystem.php
│   │           │       │   ├── PHP.php
│   │           │       │   ├── PHPUnit.php
│   │           │       │   └── Runtime.php
│   │           │       ├── Telemetry
│   │           │       │   ├── Duration.php
│   │           │       │   ├── GarbageCollectorStatus.php
│   │           │       │   ├── GarbageCollectorStatusProvider.php
│   │           │       │   ├── HRTime.php
│   │           │       │   ├── Info.php
│   │           │       │   ├── MemoryMeter.php
│   │           │       │   ├── MemoryUsage.php
│   │           │       │   ├── Php81GarbageCollectorStatusProvider.php
│   │           │       │   ├── Php83GarbageCollectorStatusProvider.php
│   │           │       │   ├── Snapshot.php
│   │           │       │   ├── StopWatch.php
│   │           │       │   ├── SystemMemoryMeter.php
│   │           │       │   ├── System.php
│   │           │       │   ├── SystemStopWatch.php
│   │           │       │   └── SystemStopWatchWithOffset.php
│   │           │       ├── Test
│   │           │       │   ├── Phpt.php
│   │           │       │   ├── TestCollectionIterator.php
│   │           │       │   ├── TestCollection.php
│   │           │       │   ├── TestData
│   │           │       │   │   ├── DataFromDataProvider.php
│   │           │       │   │   ├── DataFromTestDependency.php
│   │           │       │   │   ├── TestDataCollectionIterator.php
│   │           │       │   │   ├── TestDataCollection.php
│   │           │       │   │   └── TestData.php
│   │           │       │   ├── TestDoxBuilder.php
│   │           │       │   ├── TestDox.php
│   │           │       │   ├── TestMethodBuilder.php
│   │           │       │   ├── TestMethod.php
│   │           │       │   └── Test.php
│   │           │       ├── TestSuite
│   │           │       │   ├── TestSuiteBuilder.php
│   │           │       │   ├── TestSuiteForTestClass.php
│   │           │       │   ├── TestSuiteForTestMethodWithDataProvider.php
│   │           │       │   ├── TestSuite.php
│   │           │       │   └── TestSuiteWithName.php
│   │           │       ├── ThrowableBuilder.php
│   │           │       └── Throwable.php
│   │           ├── Exception.php
│   │           ├── Framework
│   │           │   ├── Assert
│   │           │   │   └── Functions.php
│   │           │   ├── Assert.php
│   │           │   ├── Attributes
│   │           │   │   ├── AfterClass.php
│   │           │   │   ├── After.php
│   │           │   │   ├── BackupGlobals.php
│   │           │   │   ├── BackupStaticProperties.php
│   │           │   │   ├── BeforeClass.php
│   │           │   │   ├── Before.php
│   │           │   │   ├── CodeCoverageIgnore.php
│   │           │   │   ├── CoversClass.php
│   │           │   │   ├── CoversFunction.php
│   │           │   │   ├── CoversNothing.php
│   │           │   │   ├── DataProviderExternal.php
│   │           │   │   ├── DataProvider.php
│   │           │   │   ├── DependsExternal.php
│   │           │   │   ├── DependsExternalUsingDeepClone.php
│   │           │   │   ├── DependsExternalUsingShallowClone.php
│   │           │   │   ├── DependsOnClass.php
│   │           │   │   ├── DependsOnClassUsingDeepClone.php
│   │           │   │   ├── DependsOnClassUsingShallowClone.php
│   │           │   │   ├── Depends.php
│   │           │   │   ├── DependsUsingDeepClone.php
│   │           │   │   ├── DependsUsingShallowClone.php
│   │           │   │   ├── DoesNotPerformAssertions.php
│   │           │   │   ├── ExcludeGlobalVariableFromBackup.php
│   │           │   │   ├── ExcludeStaticPropertyFromBackup.php
│   │           │   │   ├── Group.php
│   │           │   │   ├── IgnoreClassForCodeCoverage.php
│   │           │   │   ├── IgnoreDeprecations.php
│   │           │   │   ├── IgnoreFunctionForCodeCoverage.php
│   │           │   │   ├── IgnoreMethodForCodeCoverage.php
│   │           │   │   ├── Large.php
│   │           │   │   ├── Medium.php
│   │           │   │   ├── PostCondition.php
│   │           │   │   ├── PreCondition.php
│   │           │   │   ├── PreserveGlobalState.php
│   │           │   │   ├── RequiresFunction.php
│   │           │   │   ├── RequiresMethod.php
│   │           │   │   ├── RequiresOperatingSystemFamily.php
│   │           │   │   ├── RequiresOperatingSystem.php
│   │           │   │   ├── RequiresPhpExtension.php
│   │           │   │   ├── RequiresPhp.php
│   │           │   │   ├── RequiresPhpunit.php
│   │           │   │   ├── RequiresSetting.php
│   │           │   │   ├── RunClassInSeparateProcess.php
│   │           │   │   ├── RunInSeparateProcess.php
│   │           │   │   ├── RunTestsInSeparateProcesses.php
│   │           │   │   ├── Small.php
│   │           │   │   ├── TestDox.php
│   │           │   │   ├── Test.php
│   │           │   │   ├── TestWithJson.php
│   │           │   │   ├── TestWith.php
│   │           │   │   ├── Ticket.php
│   │           │   │   ├── UsesClass.php
│   │           │   │   ├── UsesFunction.php
│   │           │   │   └── WithoutErrorHandler.php
│   │           │   ├── Constraint
│   │           │   │   ├── Boolean
│   │           │   │   │   ├── IsFalse.php
│   │           │   │   │   └── IsTrue.php
│   │           │   │   ├── Callback.php
│   │           │   │   ├── Cardinality
│   │           │   │   │   ├── Count.php
│   │           │   │   │   ├── GreaterThan.php
│   │           │   │   │   ├── IsEmpty.php
│   │           │   │   │   ├── LessThan.php
│   │           │   │   │   └── SameSize.php
│   │           │   │   ├── Constraint.php
│   │           │   │   ├── Equality
│   │           │   │   │   ├── IsEqualCanonicalizing.php
│   │           │   │   │   ├── IsEqualIgnoringCase.php
│   │           │   │   │   ├── IsEqual.php
│   │           │   │   │   └── IsEqualWithDelta.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── ExceptionCode.php
│   │           │   │   │   ├── ExceptionMessageIsOrContains.php
│   │           │   │   │   ├── ExceptionMessageMatchesRegularExpression.php
│   │           │   │   │   └── Exception.php
│   │           │   │   ├── Filesystem
│   │           │   │   │   ├── DirectoryExists.php
│   │           │   │   │   ├── FileExists.php
│   │           │   │   │   ├── IsReadable.php
│   │           │   │   │   └── IsWritable.php
│   │           │   │   ├── IsAnything.php
│   │           │   │   ├── IsIdentical.php
│   │           │   │   ├── JsonMatches.php
│   │           │   │   ├── Math
│   │           │   │   │   ├── IsFinite.php
│   │           │   │   │   ├── IsInfinite.php
│   │           │   │   │   └── IsNan.php
│   │           │   │   ├── Object
│   │           │   │   │   ├── ObjectEquals.php
│   │           │   │   │   └── ObjectHasProperty.php
│   │           │   │   ├── Operator
│   │           │   │   │   ├── BinaryOperator.php
│   │           │   │   │   ├── LogicalAnd.php
│   │           │   │   │   ├── LogicalNot.php
│   │           │   │   │   ├── LogicalOr.php
│   │           │   │   │   ├── LogicalXor.php
│   │           │   │   │   ├── Operator.php
│   │           │   │   │   └── UnaryOperator.php
│   │           │   │   ├── String
│   │           │   │   │   ├── IsJson.php
│   │           │   │   │   ├── RegularExpression.php
│   │           │   │   │   ├── StringContains.php
│   │           │   │   │   ├── StringEndsWith.php
│   │           │   │   │   ├── StringEqualsStringIgnoringLineEndings.php
│   │           │   │   │   ├── StringMatchesFormatDescription.php
│   │           │   │   │   └── StringStartsWith.php
│   │           │   │   ├── Traversable
│   │           │   │   │   ├── ArrayHasKey.php
│   │           │   │   │   ├── IsList.php
│   │           │   │   │   ├── TraversableContainsEqual.php
│   │           │   │   │   ├── TraversableContainsIdentical.php
│   │           │   │   │   ├── TraversableContainsOnly.php
│   │           │   │   │   └── TraversableContains.php
│   │           │   │   └── Type
│   │           │   │       ├── IsInstanceOf.php
│   │           │   │       ├── IsNull.php
│   │           │   │       └── IsType.php
│   │           │   ├── DataProviderTestSuite.php
│   │           │   ├── Exception
│   │           │   │   ├── AssertionFailedError.php
│   │           │   │   ├── CodeCoverageException.php
│   │           │   │   ├── EmptyStringException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── ExpectationFailedException.php
│   │           │   │   ├── GeneratorNotSupportedException.php
│   │           │   │   ├── Incomplete
│   │           │   │   │   ├── IncompleteTestError.php
│   │           │   │   │   └── IncompleteTest.php
│   │           │   │   ├── InvalidArgumentException.php
│   │           │   │   ├── InvalidCoversTargetException.php
│   │           │   │   ├── InvalidDataProviderException.php
│   │           │   │   ├── InvalidDependencyException.php
│   │           │   │   ├── NoChildTestSuiteException.php
│   │           │   │   ├── ObjectEquals
│   │           │   │   │   ├── ActualValueIsNotAnObjectException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotAcceptParameterTypeException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareBoolReturnTypeException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareExactlyOneParameterException.php
│   │           │   │   │   ├── ComparisonMethodDoesNotDeclareParameterTypeException.php
│   │           │   │   │   └── ComparisonMethodDoesNotExistException.php
│   │           │   │   ├── PhptAssertionFailedError.php
│   │           │   │   ├── ProcessIsolationException.php
│   │           │   │   ├── Skipped
│   │           │   │   │   ├── SkippedTest.php
│   │           │   │   │   ├── SkippedTestSuiteError.php
│   │           │   │   │   └── SkippedWithMessageException.php
│   │           │   │   ├── UnknownClassOrInterfaceException.php
│   │           │   │   └── UnknownTypeException.php
│   │           │   ├── ExecutionOrderDependency.php
│   │           │   ├── MockObject
│   │           │   │   ├── ConfigurableMethod.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── BadMethodCallException.php
│   │           │   │   │   ├── CannotUseOnlyMethodsException.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   ├── IncompatibleReturnValueException.php
│   │           │   │   │   ├── MatchBuilderNotFoundException.php
│   │           │   │   │   ├── MatcherAlreadyRegisteredException.php
│   │           │   │   │   ├── MethodCannotBeConfiguredException.php
│   │           │   │   │   ├── MethodNameAlreadyConfiguredException.php
│   │           │   │   │   ├── MethodNameNotConfiguredException.php
│   │           │   │   │   ├── MethodParametersAlreadyConfiguredException.php
│   │           │   │   │   ├── NeverReturningMethodException.php
│   │           │   │   │   ├── NoMoreReturnValuesConfiguredException.php
│   │           │   │   │   ├── ReturnValueNotConfiguredException.php
│   │           │   │   │   └── RuntimeException.php
│   │           │   │   ├── Generator
│   │           │   │   │   ├── Exception
│   │           │   │   │   │   ├── CannotUseAddMethodsException.php
│   │           │   │   │   │   ├── ClassIsEnumerationException.php
│   │           │   │   │   │   ├── ClassIsFinalException.php
│   │           │   │   │   │   ├── ClassIsReadonlyException.php
│   │           │   │   │   │   ├── DuplicateMethodException.php
│   │           │   │   │   │   ├── Exception.php
│   │           │   │   │   │   ├── InvalidMethodNameException.php
│   │           │   │   │   │   ├── NameAlreadyInUseException.php
│   │           │   │   │   │   ├── OriginalConstructorInvocationRequiredException.php
│   │           │   │   │   │   ├── ReflectionException.php
│   │           │   │   │   │   ├── RuntimeException.php
│   │           │   │   │   │   ├── SoapExtensionNotAvailableException.php
│   │           │   │   │   │   ├── UnknownClassException.php
│   │           │   │   │   │   ├── UnknownTraitException.php
│   │           │   │   │   │   └── UnknownTypeException.php
│   │           │   │   │   ├── Generator.php
│   │           │   │   │   ├── MockClass.php
│   │           │   │   │   ├── MockMethod.php
│   │           │   │   │   ├── MockMethodSet.php
│   │           │   │   │   ├── MockTrait.php
│   │           │   │   │   ├── MockType.php
│   │           │   │   │   ├── TemplateLoader.php
│   │           │   │   │   └── templates
│   │           │   │   │       ├── deprecation.tpl
│   │           │   │   │       ├── doubled_method.tpl
│   │           │   │   │       ├── doubled_static_method.tpl
│   │           │   │   │       ├── intersection.tpl
│   │           │   │   │       ├── proxied_method.tpl
│   │           │   │   │       ├── test_double_class.tpl
│   │           │   │   │       ├── trait_class.tpl
│   │           │   │   │       ├── wsdl_class.tpl
│   │           │   │   │       └── wsdl_method.tpl
│   │           │   │   ├── MockBuilder.php
│   │           │   │   └── Runtime
│   │           │   │       ├── Api
│   │           │   │       │   ├── DoubledCloneMethod.php
│   │           │   │       │   ├── Method.php
│   │           │   │       │   ├── MockObjectApi.php
│   │           │   │       │   ├── ProxiedCloneMethod.php
│   │           │   │       │   └── StubApi.php
│   │           │   │       ├── Builder
│   │           │   │       │   ├── Identity.php
│   │           │   │       │   ├── InvocationMocker.php
│   │           │   │       │   ├── InvocationStubber.php
│   │           │   │       │   ├── MethodNameMatch.php
│   │           │   │       │   ├── ParametersMatch.php
│   │           │   │       │   └── Stub.php
│   │           │   │       ├── Interface
│   │           │   │       │   ├── MockObjectInternal.php
│   │           │   │       │   ├── MockObject.php
│   │           │   │       │   ├── StubInternal.php
│   │           │   │       │   └── Stub.php
│   │           │   │       ├── InvocationHandler.php
│   │           │   │       ├── Invocation.php
│   │           │   │       ├── Matcher.php
│   │           │   │       ├── MethodNameConstraint.php
│   │           │   │       ├── ReturnValueGenerator.php
│   │           │   │       ├── Rule
│   │           │   │       │   ├── AnyInvokedCount.php
│   │           │   │       │   ├── AnyParameters.php
│   │           │   │       │   ├── InvocationOrder.php
│   │           │   │       │   ├── InvokedAtLeastCount.php
│   │           │   │       │   ├── InvokedAtLeastOnce.php
│   │           │   │       │   ├── InvokedAtMostCount.php
│   │           │   │       │   ├── InvokedCount.php
│   │           │   │       │   ├── MethodName.php
│   │           │   │       │   ├── Parameters.php
│   │           │   │       │   └── ParametersRule.php
│   │           │   │       └── Stub
│   │           │   │           ├── ConsecutiveCalls.php
│   │           │   │           ├── Exception.php
│   │           │   │           ├── ReturnArgument.php
│   │           │   │           ├── ReturnCallback.php
│   │           │   │           ├── ReturnReference.php
│   │           │   │           ├── ReturnSelf.php
│   │           │   │           ├── ReturnStub.php
│   │           │   │           ├── ReturnValueMap.php
│   │           │   │           └── Stub.php
│   │           │   ├── Reorderable.php
│   │           │   ├── SelfDescribing.php
│   │           │   ├── TestBuilder.php
│   │           │   ├── TestCase.php
│   │           │   ├── Test.php
│   │           │   ├── TestRunner.php
│   │           │   ├── TestSize
│   │           │   │   ├── Known.php
│   │           │   │   ├── Large.php
│   │           │   │   ├── Medium.php
│   │           │   │   ├── Small.php
│   │           │   │   ├── TestSize.php
│   │           │   │   └── Unknown.php
│   │           │   ├── TestStatus
│   │           │   │   ├── Deprecation.php
│   │           │   │   ├── Error.php
│   │           │   │   ├── Failure.php
│   │           │   │   ├── Incomplete.php
│   │           │   │   ├── Known.php
│   │           │   │   ├── Notice.php
│   │           │   │   ├── Risky.php
│   │           │   │   ├── Skipped.php
│   │           │   │   ├── Success.php
│   │           │   │   ├── TestStatus.php
│   │           │   │   ├── Unknown.php
│   │           │   │   └── Warning.php
│   │           │   ├── TestSuiteIterator.php
│   │           │   └── TestSuite.php
│   │           ├── Logging
│   │           │   ├── EventLogger.php
│   │           │   ├── JUnit
│   │           │   │   ├── JunitXmlLogger.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── Subscriber.php
│   │           │   │       ├── TestErroredSubscriber.php
│   │           │   │       ├── TestFailedSubscriber.php
│   │           │   │       ├── TestFinishedSubscriber.php
│   │           │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │       ├── TestPreparationFailedSubscriber.php
│   │           │   │       ├── TestPreparationStartedSubscriber.php
│   │           │   │       ├── TestPreparedSubscriber.php
│   │           │   │       ├── TestRunnerExecutionFinishedSubscriber.php
│   │           │   │       ├── TestSkippedSubscriber.php
│   │           │   │       ├── TestSuiteFinishedSubscriber.php
│   │           │   │       └── TestSuiteStartedSubscriber.php
│   │           │   ├── TeamCity
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   ├── TestErroredSubscriber.php
│   │           │   │   │   ├── TestFailedSubscriber.php
│   │           │   │   │   ├── TestFinishedSubscriber.php
│   │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   ├── TestPreparedSubscriber.php
│   │           │   │   │   ├── TestRunnerExecutionFinishedSubscriber.php
│   │           │   │   │   ├── TestSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │           │   │   │   └── TestSuiteStartedSubscriber.php
│   │           │   │   └── TeamCityLogger.php
│   │           │   └── TestDox
│   │           │       ├── HtmlRenderer.php
│   │           │       ├── NamePrettifier.php
│   │           │       ├── PlainTextRenderer.php
│   │           │       └── TestResult
│   │           │           ├── Subscriber
│   │           │           │   ├── Subscriber.php
│   │           │           │   ├── TestConsideredRiskySubscriber.php
│   │           │           │   ├── TestErroredSubscriber.php
│   │           │           │   ├── TestFailedSubscriber.php
│   │           │           │   ├── TestFinishedSubscriber.php
│   │           │           │   ├── TestMarkedIncompleteSubscriber.php
│   │           │           │   ├── TestPassedSubscriber.php
│   │           │           │   ├── TestPreparedSubscriber.php
│   │           │           │   ├── TestSkippedSubscriber.php
│   │           │           │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredNoticeSubscriber.php
│   │           │           │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │           │           │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │           │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │           │   └── TestTriggeredWarningSubscriber.php
│   │           │           ├── TestResultCollectionIterator.php
│   │           │           ├── TestResultCollection.php
│   │           │           ├── TestResultCollector.php
│   │           │           └── TestResult.php
│   │           ├── Metadata
│   │           │   ├── AfterClass.php
│   │           │   ├── After.php
│   │           │   ├── Api
│   │           │   │   ├── CodeCoverage.php
│   │           │   │   ├── DataProvider.php
│   │           │   │   ├── Dependencies.php
│   │           │   │   ├── Groups.php
│   │           │   │   ├── HookMethods.php
│   │           │   │   └── Requirements.php
│   │           │   ├── BackupGlobals.php
│   │           │   ├── BackupStaticProperties.php
│   │           │   ├── BeforeClass.php
│   │           │   ├── Before.php
│   │           │   ├── CoversClass.php
│   │           │   ├── CoversDefaultClass.php
│   │           │   ├── CoversFunction.php
│   │           │   ├── CoversNothing.php
│   │           │   ├── Covers.php
│   │           │   ├── DataProvider.php
│   │           │   ├── DependsOnClass.php
│   │           │   ├── DependsOnMethod.php
│   │           │   ├── DoesNotPerformAssertions.php
│   │           │   ├── Exception
│   │           │   │   ├── AnnotationsAreNotSupportedForInternalClassesException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidVersionRequirementException.php
│   │           │   │   ├── NoVersionRequirementException.php
│   │           │   │   └── ReflectionException.php
│   │           │   ├── ExcludeGlobalVariableFromBackup.php
│   │           │   ├── ExcludeStaticPropertyFromBackup.php
│   │           │   ├── Group.php
│   │           │   ├── IgnoreClassForCodeCoverage.php
│   │           │   ├── IgnoreDeprecations.php
│   │           │   ├── IgnoreFunctionForCodeCoverage.php
│   │           │   ├── IgnoreMethodForCodeCoverage.php
│   │           │   ├── MetadataCollectionIterator.php
│   │           │   ├── MetadataCollection.php
│   │           │   ├── Metadata.php
│   │           │   ├── Parser
│   │           │   │   ├── Annotation
│   │           │   │   │   ├── DocBlock.php
│   │           │   │   │   └── Registry.php
│   │           │   │   ├── AnnotationParser.php
│   │           │   │   ├── AttributeParser.php
│   │           │   │   ├── CachingParser.php
│   │           │   │   ├── ParserChain.php
│   │           │   │   ├── Parser.php
│   │           │   │   └── Registry.php
│   │           │   ├── PostCondition.php
│   │           │   ├── PreCondition.php
│   │           │   ├── PreserveGlobalState.php
│   │           │   ├── RequiresFunction.php
│   │           │   ├── RequiresMethod.php
│   │           │   ├── RequiresOperatingSystemFamily.php
│   │           │   ├── RequiresOperatingSystem.php
│   │           │   ├── RequiresPhpExtension.php
│   │           │   ├── RequiresPhp.php
│   │           │   ├── RequiresPhpunit.php
│   │           │   ├── RequiresSetting.php
│   │           │   ├── RunClassInSeparateProcess.php
│   │           │   ├── RunInSeparateProcess.php
│   │           │   ├── RunTestsInSeparateProcesses.php
│   │           │   ├── TestDox.php
│   │           │   ├── Test.php
│   │           │   ├── TestWith.php
│   │           │   ├── UsesClass.php
│   │           │   ├── UsesDefaultClass.php
│   │           │   ├── UsesFunction.php
│   │           │   ├── Uses.php
│   │           │   ├── Version
│   │           │   │   ├── ComparisonRequirement.php
│   │           │   │   ├── ConstraintRequirement.php
│   │           │   │   └── Requirement.php
│   │           │   └── WithoutErrorHandler.php
│   │           ├── Runner
│   │           │   ├── Baseline
│   │           │   │   ├── Baseline.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── CannotLoadBaselineException.php
│   │           │   │   │   └── FileDoesNotHaveLineException.php
│   │           │   │   ├── Generator.php
│   │           │   │   ├── Issue.php
│   │           │   │   ├── Reader.php
│   │           │   │   ├── RelativePathCalculator.php
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   └── TestTriggeredWarningSubscriber.php
│   │           │   │   └── Writer.php
│   │           │   ├── CodeCoverage.php
│   │           │   ├── ErrorHandler.php
│   │           │   ├── Exception
│   │           │   │   ├── ClassCannotBeFoundException.php
│   │           │   │   ├── ClassDoesNotExtendTestCaseException.php
│   │           │   │   ├── ClassIsAbstractException.php
│   │           │   │   ├── DirectoryDoesNotExistException.php
│   │           │   │   ├── ErrorException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── FileDoesNotExistException.php
│   │           │   │   ├── InvalidOrderException.php
│   │           │   │   ├── InvalidPhptFileException.php
│   │           │   │   ├── ParameterDoesNotExistException.php
│   │           │   │   ├── PhptExternalFileCannotBeLoadedException.php
│   │           │   │   └── UnsupportedPhptSectionException.php
│   │           │   ├── Extension
│   │           │   │   ├── ExtensionBootstrapper.php
│   │           │   │   ├── Extension.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── ParameterCollection.php
│   │           │   │   └── PharLoader.php
│   │           │   ├── Filter
│   │           │   │   ├── ExcludeGroupFilterIterator.php
│   │           │   │   ├── Factory.php
│   │           │   │   ├── GroupFilterIterator.php
│   │           │   │   ├── IncludeGroupFilterIterator.php
│   │           │   │   ├── NameFilterIterator.php
│   │           │   │   └── TestIdFilterIterator.php
│   │           │   ├── GarbageCollection
│   │           │   │   ├── GarbageCollectionHandler.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── ExecutionFinishedSubscriber.php
│   │           │   │       ├── ExecutionStartedSubscriber.php
│   │           │   │       ├── Subscriber.php
│   │           │   │       └── TestFinishedSubscriber.php
│   │           │   ├── PhptTestCase.php
│   │           │   ├── ResultCache
│   │           │   │   ├── DefaultResultCache.php
│   │           │   │   ├── NullResultCache.php
│   │           │   │   ├── ResultCacheHandler.php
│   │           │   │   ├── ResultCache.php
│   │           │   │   └── Subscriber
│   │           │   │       ├── Subscriber.php
│   │           │   │       ├── TestConsideredRiskySubscriber.php
│   │           │   │       ├── TestErroredSubscriber.php
│   │           │   │       ├── TestFailedSubscriber.php
│   │           │   │       ├── TestFinishedSubscriber.php
│   │           │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │       ├── TestPreparedSubscriber.php
│   │           │   │       ├── TestSkippedSubscriber.php
│   │           │   │       ├── TestSuiteFinishedSubscriber.php
│   │           │   │       └── TestSuiteStartedSubscriber.php
│   │           │   ├── TestResult
│   │           │   │   ├── Collector.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── Issue.php
│   │           │   │   ├── PassedTests.php
│   │           │   │   ├── Subscriber
│   │           │   │   │   ├── BeforeTestClassMethodErroredSubscriber.php
│   │           │   │   │   ├── ExecutionStartedSubscriber.php
│   │           │   │   │   ├── Subscriber.php
│   │           │   │   │   ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   ├── TestErroredSubscriber.php
│   │           │   │   │   ├── TestFailedSubscriber.php
│   │           │   │   │   ├── TestFinishedSubscriber.php
│   │           │   │   │   ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   ├── TestPreparedSubscriber.php
│   │           │   │   │   ├── TestRunnerTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestRunnerTriggeredWarningSubscriber.php
│   │           │   │   │   ├── TestSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteFinishedSubscriber.php
│   │           │   │   │   ├── TestSuiteSkippedSubscriber.php
│   │           │   │   │   ├── TestSuiteStartedSubscriber.php
│   │           │   │   │   ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredErrorSubscriber.php
│   │           │   │   │   ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitErrorSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │   │   │   ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   └── TestTriggeredWarningSubscriber.php
│   │           │   │   └── TestResult.php
│   │           │   ├── TestSuiteLoader.php
│   │           │   ├── TestSuiteSorter.php
│   │           │   └── Version.php
│   │           ├── TextUI
│   │           │   ├── Application.php
│   │           │   ├── Command
│   │           │   │   ├── Command.php
│   │           │   │   ├── Commands
│   │           │   │   │   ├── AtLeastVersionCommand.php
│   │           │   │   │   ├── GenerateConfigurationCommand.php
│   │           │   │   │   ├── ListGroupsCommand.php
│   │           │   │   │   ├── ListTestsAsTextCommand.php
│   │           │   │   │   ├── ListTestsAsXmlCommand.php
│   │           │   │   │   ├── ListTestSuitesCommand.php
│   │           │   │   │   ├── MigrateConfigurationCommand.php
│   │           │   │   │   ├── ShowHelpCommand.php
│   │           │   │   │   ├── ShowVersionCommand.php
│   │           │   │   │   ├── VersionCheckCommand.php
│   │           │   │   │   └── WarmCodeCoverageCacheCommand.php
│   │           │   │   └── Result.php
│   │           │   ├── Configuration
│   │           │   │   ├── Builder.php
│   │           │   │   ├── Cli
│   │           │   │   │   ├── Builder.php
│   │           │   │   │   ├── Configuration.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   └── XmlConfigurationFileFinder.php
│   │           │   │   ├── CodeCoverageFilterRegistry.php
│   │           │   │   ├── Configuration.php
│   │           │   │   ├── Exception
│   │           │   │   │   ├── CannotFindSchemaException.php
│   │           │   │   │   ├── CodeCoverageReportNotConfiguredException.php
│   │           │   │   │   ├── ConfigurationCannotBeBuiltException.php
│   │           │   │   │   ├── Exception.php
│   │           │   │   │   ├── FilterNotConfiguredException.php
│   │           │   │   │   ├── LoggingNotConfiguredException.php
│   │           │   │   │   ├── NoBaselineException.php
│   │           │   │   │   ├── NoBootstrapException.php
│   │           │   │   │   ├── NoCacheDirectoryException.php
│   │           │   │   │   ├── NoCliArgumentException.php
│   │           │   │   │   ├── NoConfigurationFileException.php
│   │           │   │   │   ├── NoCoverageCacheDirectoryException.php
│   │           │   │   │   ├── NoCustomCssFileException.php
│   │           │   │   │   ├── NoDefaultTestSuiteException.php
│   │           │   │   │   └── NoPharExtensionDirectoryException.php
│   │           │   │   ├── Merger.php
│   │           │   │   ├── PhpHandler.php
│   │           │   │   ├── Registry.php
│   │           │   │   ├── SourceFilter.php
│   │           │   │   ├── SourceMapper.php
│   │           │   │   ├── TestSuiteBuilder.php
│   │           │   │   ├── Value
│   │           │   │   │   ├── ConstantCollectionIterator.php
│   │           │   │   │   ├── ConstantCollection.php
│   │           │   │   │   ├── Constant.php
│   │           │   │   │   ├── DirectoryCollectionIterator.php
│   │           │   │   │   ├── DirectoryCollection.php
│   │           │   │   │   ├── Directory.php
│   │           │   │   │   ├── ExtensionBootstrapCollectionIterator.php
│   │           │   │   │   ├── ExtensionBootstrapCollection.php
│   │           │   │   │   ├── ExtensionBootstrap.php
│   │           │   │   │   ├── FileCollectionIterator.php
│   │           │   │   │   ├── FileCollection.php
│   │           │   │   │   ├── File.php
│   │           │   │   │   ├── FilterDirectoryCollectionIterator.php
│   │           │   │   │   ├── FilterDirectoryCollection.php
│   │           │   │   │   ├── FilterDirectory.php
│   │           │   │   │   ├── GroupCollectionIterator.php
│   │           │   │   │   ├── GroupCollection.php
│   │           │   │   │   ├── Group.php
│   │           │   │   │   ├── IniSettingCollectionIterator.php
│   │           │   │   │   ├── IniSettingCollection.php
│   │           │   │   │   ├── IniSetting.php
│   │           │   │   │   ├── Php.php
│   │           │   │   │   ├── Source.php
│   │           │   │   │   ├── TestDirectoryCollectionIterator.php
│   │           │   │   │   ├── TestDirectoryCollection.php
│   │           │   │   │   ├── TestDirectory.php
│   │           │   │   │   ├── TestFileCollectionIterator.php
│   │           │   │   │   ├── TestFileCollection.php
│   │           │   │   │   ├── TestFile.php
│   │           │   │   │   ├── TestSuiteCollectionIterator.php
│   │           │   │   │   ├── TestSuiteCollection.php
│   │           │   │   │   ├── TestSuite.php
│   │           │   │   │   ├── VariableCollectionIterator.php
│   │           │   │   │   ├── VariableCollection.php
│   │           │   │   │   └── Variable.php
│   │           │   │   └── Xml
│   │           │   │       ├── CodeCoverage
│   │           │   │       │   ├── CodeCoverage.php
│   │           │   │       │   └── Report
│   │           │   │       │       ├── Clover.php
│   │           │   │       │       ├── Cobertura.php
│   │           │   │       │       ├── Crap4j.php
│   │           │   │       │       ├── Html.php
│   │           │   │       │       ├── Php.php
│   │           │   │       │       ├── Text.php
│   │           │   │       │       └── Xml.php
│   │           │   │       ├── Configuration.php
│   │           │   │       ├── DefaultConfiguration.php
│   │           │   │       ├── Exception.php
│   │           │   │       ├── Generator.php
│   │           │   │       ├── Groups.php
│   │           │   │       ├── LoadedFromFileConfiguration.php
│   │           │   │       ├── Loader.php
│   │           │   │       ├── Logging
│   │           │   │       │   ├── Junit.php
│   │           │   │       │   ├── Logging.php
│   │           │   │       │   ├── TeamCity.php
│   │           │   │       │   └── TestDox
│   │           │   │       │       ├── Html.php
│   │           │   │       │       └── Text.php
│   │           │   │       ├── Migration
│   │           │   │       │   ├── MigrationBuilder.php
│   │           │   │       │   ├── MigrationException.php
│   │           │   │       │   ├── Migrations
│   │           │   │       │   │   ├── ConvertLogTypes.php
│   │           │   │       │   │   ├── CoverageCloverToReport.php
│   │           │   │       │   │   ├── CoverageCrap4jToReport.php
│   │           │   │       │   │   ├── CoverageHtmlToReport.php
│   │           │   │       │   │   ├── CoveragePhpToReport.php
│   │           │   │       │   │   ├── CoverageTextToReport.php
│   │           │   │       │   │   ├── CoverageXmlToReport.php
│   │           │   │       │   │   ├── IntroduceCacheDirectoryAttribute.php
│   │           │   │       │   │   ├── IntroduceCoverageElement.php
│   │           │   │       │   │   ├── LogToReportMigration.php
│   │           │   │       │   │   ├── Migration.php
│   │           │   │       │   │   ├── MoveAttributesFromFilterWhitelistToCoverage.php
│   │           │   │       │   │   ├── MoveAttributesFromRootToCoverage.php
│   │           │   │       │   │   ├── MoveCoverageDirectoriesToSource.php
│   │           │   │       │   │   ├── MoveWhitelistExcludesToCoverage.php
│   │           │   │       │   │   ├── MoveWhitelistIncludesToCoverage.php
│   │           │   │       │   │   ├── RemoveBeStrictAboutResourceUsageDuringSmallTestsAttribute.php
│   │           │   │       │   │   ├── RemoveBeStrictAboutTodoAnnotatedTestsAttribute.php
│   │           │   │       │   │   ├── RemoveCacheResultFileAttribute.php
│   │           │   │       │   │   ├── RemoveCacheTokensAttribute.php
│   │           │   │       │   │   ├── RemoveConversionToExceptionsAttributes.php
│   │           │   │       │   │   ├── RemoveCoverageElementCacheDirectoryAttribute.php
│   │           │   │       │   │   ├── RemoveCoverageElementProcessUncoveredFilesAttribute.php
│   │           │   │       │   │   ├── RemoveEmptyFilter.php
│   │           │   │       │   │   ├── RemoveListeners.php
│   │           │   │       │   │   ├── RemoveLoggingElements.php
│   │           │   │       │   │   ├── RemoveLogTypes.php
│   │           │   │       │   │   ├── RemoveNoInteractionAttribute.php
│   │           │   │       │   │   ├── RemovePrinterAttributes.php
│   │           │   │       │   │   ├── RemoveTestDoxGroupsElement.php
│   │           │   │       │   │   ├── RemoveTestSuiteLoaderAttributes.php
│   │           │   │       │   │   ├── RemoveVerboseAttribute.php
│   │           │   │       │   │   ├── RenameBackupStaticAttributesAttribute.php
│   │           │   │       │   │   ├── RenameBeStrictAboutCoversAnnotationAttribute.php
│   │           │   │       │   │   ├── RenameForceCoversAnnotationAttribute.php
│   │           │   │       │   │   └── UpdateSchemaLocation.php
│   │           │   │       │   ├── Migrator.php
│   │           │   │       │   └── SnapshotNodeList.php
│   │           │   │       ├── PHPUnit.php
│   │           │   │       ├── SchemaDetector
│   │           │   │       │   ├── FailedSchemaDetectionResult.php
│   │           │   │       │   ├── SchemaDetectionResult.php
│   │           │   │       │   ├── SchemaDetector.php
│   │           │   │       │   └── SuccessfulSchemaDetectionResult.php
│   │           │   │       ├── SchemaFinder.php
│   │           │   │       ├── TestSuiteMapper.php
│   │           │   │       └── Validator
│   │           │   │           ├── ValidationResult.php
│   │           │   │           └── Validator.php
│   │           │   ├── Exception
│   │           │   │   ├── CannotOpenSocketException.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── InvalidSocketException.php
│   │           │   │   ├── RuntimeException.php
│   │           │   │   ├── TestDirectoryNotFoundException.php
│   │           │   │   └── TestFileNotFoundException.php
│   │           │   ├── Help.php
│   │           │   ├── Output
│   │           │   │   ├── Default
│   │           │   │   │   ├── ProgressPrinter
│   │           │   │   │   │   ├── ProgressPrinter.php
│   │           │   │   │   │   └── Subscriber
│   │           │   │   │   │       ├── BeforeTestClassMethodErroredSubscriber.php
│   │           │   │   │   │       ├── Subscriber.php
│   │           │   │   │   │       ├── TestConsideredRiskySubscriber.php
│   │           │   │   │   │       ├── TestErroredSubscriber.php
│   │           │   │   │   │       ├── TestFailedSubscriber.php
│   │           │   │   │   │       ├── TestFinishedSubscriber.php
│   │           │   │   │   │       ├── TestMarkedIncompleteSubscriber.php
│   │           │   │   │   │       ├── TestPreparedSubscriber.php
│   │           │   │   │   │       ├── TestRunnerExecutionStartedSubscriber.php
│   │           │   │   │   │       ├── TestSkippedSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredErrorSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredNoticeSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpNoticeSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpunitDeprecationSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpunitWarningSubscriber.php
│   │           │   │   │   │       ├── TestTriggeredPhpWarningSubscriber.php
│   │           │   │   │   │       └── TestTriggeredWarningSubscriber.php
│   │           │   │   │   ├── ResultPrinter.php
│   │           │   │   │   └── UnexpectedOutputPrinter.php
│   │           │   │   ├── Facade.php
│   │           │   │   ├── Printer
│   │           │   │   │   ├── DefaultPrinter.php
│   │           │   │   │   ├── NullPrinter.php
│   │           │   │   │   └── Printer.php
│   │           │   │   ├── SummaryPrinter.php
│   │           │   │   └── TestDox
│   │           │   │       └── ResultPrinter.php
│   │           │   ├── ShellExitCodeCalculator.php
│   │           │   ├── TestRunner.php
│   │           │   └── TestSuiteFilterProcessor.php
│   │           └── Util
│   │               ├── Cloner.php
│   │               ├── Color.php
│   │               ├── Exception
│   │               │   ├── Exception.php
│   │               │   ├── InvalidDirectoryException.php
│   │               │   ├── InvalidJsonException.php
│   │               │   ├── InvalidVersionOperatorException.php
│   │               │   ├── PhpProcessException.php
│   │               │   └── XmlException.php
│   │               ├── ExcludeList.php
│   │               ├── Exporter.php
│   │               ├── Filesystem.php
│   │               ├── Filter.php
│   │               ├── GlobalState.php
│   │               ├── Http
│   │               │   ├── Downloader.php
│   │               │   └── PhpDownloader.php
│   │               ├── Json.php
│   │               ├── PHP
│   │               │   ├── AbstractPhpProcess.php
│   │               │   ├── DefaultPhpProcess.php
│   │               │   └── Template
│   │               │       ├── PhptTestCase.tpl
│   │               │       ├── TestCaseClass.tpl
│   │               │       └── TestCaseMethod.tpl
│   │               ├── Reflection.php
│   │               ├── Test.php
│   │               ├── ThrowableToStringMapper.php
│   │               ├── VersionComparisonOperator.php
│   │               └── Xml
│   │                   ├── Loader.php
│   │                   └── Xml.php
│   ├── psr
│   │   ├── clock
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       └── ClockInterface.php
│   │   ├── container
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ContainerExceptionInterface.php
│   │   │       ├── ContainerInterface.php
│   │   │       └── NotFoundExceptionInterface.php
│   │   ├── event-dispatcher
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── EventDispatcherInterface.php
│   │   │       ├── ListenerProviderInterface.php
│   │   │       └── StoppableEventInterface.php
│   │   ├── http-client
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── ClientExceptionInterface.php
│   │   │       ├── ClientInterface.php
│   │   │       ├── NetworkExceptionInterface.php
│   │   │       └── RequestExceptionInterface.php
│   │   ├── http-factory
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── RequestFactoryInterface.php
│   │   │       ├── ResponseFactoryInterface.php
│   │   │       ├── ServerRequestFactoryInterface.php
│   │   │       ├── StreamFactoryInterface.php
│   │   │       ├── UploadedFileFactoryInterface.php
│   │   │       └── UriFactoryInterface.php
│   │   ├── http-message
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── docs
│   │   │   │   ├── PSR7-Interfaces.md
│   │   │   │   └── PSR7-Usage.md
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── MessageInterface.php
│   │   │       ├── RequestInterface.php
│   │   │       ├── ResponseInterface.php
│   │   │       ├── ServerRequestInterface.php
│   │   │       ├── StreamInterface.php
│   │   │       ├── UploadedFileInterface.php
│   │   │       └── UriInterface.php
│   │   ├── log
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── AbstractLogger.php
│   │   │       ├── InvalidArgumentException.php
│   │   │       ├── LoggerAwareInterface.php
│   │   │       ├── LoggerAwareTrait.php
│   │   │       ├── LoggerInterface.php
│   │   │       ├── LoggerTrait.php
│   │   │       ├── LogLevel.php
│   │   │       └── NullLogger.php
│   │   └── simple-cache
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── CacheException.php
│   │           ├── CacheInterface.php
│   │           └── InvalidArgumentException.php
│   ├── psy
│   │   └── psysh
│   │       ├── bin
│   │       │   └── psysh
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── CodeCleaner
│   │           │   ├── AbstractClassPass.php
│   │           │   ├── AssignThisVariablePass.php
│   │           │   ├── CalledClassPass.php
│   │           │   ├── CallTimePassByReferencePass.php
│   │           │   ├── CodeCleanerPass.php
│   │           │   ├── EmptyArrayDimFetchPass.php
│   │           │   ├── ExitPass.php
│   │           │   ├── FinalClassPass.php
│   │           │   ├── FunctionContextPass.php
│   │           │   ├── FunctionReturnInWriteContextPass.php
│   │           │   ├── ImplicitReturnPass.php
│   │           │   ├── IssetPass.php
│   │           │   ├── LabelContextPass.php
│   │           │   ├── LeavePsyshAlonePass.php
│   │           │   ├── ListPass.php
│   │           │   ├── LoopContextPass.php
│   │           │   ├── MagicConstantsPass.php
│   │           │   ├── NamespaceAwarePass.php
│   │           │   ├── NamespacePass.php
│   │           │   ├── NoReturnValue.php
│   │           │   ├── PassableByReferencePass.php
│   │           │   ├── RequirePass.php
│   │           │   ├── ReturnTypePass.php
│   │           │   ├── StrictTypesPass.php
│   │           │   ├── UseStatementPass.php
│   │           │   ├── ValidClassNamePass.php
│   │           │   ├── ValidConstructorPass.php
│   │           │   └── ValidFunctionNamePass.php
│   │           ├── CodeCleaner.php
│   │           ├── Command
│   │           │   ├── BufferCommand.php
│   │           │   ├── ClearCommand.php
│   │           │   ├── CodeArgumentParser.php
│   │           │   ├── Command.php
│   │           │   ├── DocCommand.php
│   │           │   ├── DumpCommand.php
│   │           │   ├── EditCommand.php
│   │           │   ├── ExitCommand.php
│   │           │   ├── HelpCommand.php
│   │           │   ├── HistoryCommand.php
│   │           │   ├── ListCommand
│   │           │   │   ├── ClassConstantEnumerator.php
│   │           │   │   ├── ClassEnumerator.php
│   │           │   │   ├── ConstantEnumerator.php
│   │           │   │   ├── Enumerator.php
│   │           │   │   ├── FunctionEnumerator.php
│   │           │   │   ├── GlobalVariableEnumerator.php
│   │           │   │   ├── MethodEnumerator.php
│   │           │   │   ├── PropertyEnumerator.php
│   │           │   │   └── VariableEnumerator.php
│   │           │   ├── ListCommand.php
│   │           │   ├── ParseCommand.php
│   │           │   ├── PsyVersionCommand.php
│   │           │   ├── ReflectingCommand.php
│   │           │   ├── ShowCommand.php
│   │           │   ├── SudoCommand.php
│   │           │   ├── ThrowUpCommand.php
│   │           │   ├── TimeitCommand
│   │           │   │   └── TimeitVisitor.php
│   │           │   ├── TimeitCommand.php
│   │           │   ├── TraceCommand.php
│   │           │   ├── WhereamiCommand.php
│   │           │   └── WtfCommand.php
│   │           ├── ConfigPaths.php
│   │           ├── Configuration.php
│   │           ├── ContextAware.php
│   │           ├── Context.php
│   │           ├── EnvInterface.php
│   │           ├── Exception
│   │           │   ├── BreakException.php
│   │           │   ├── DeprecatedException.php
│   │           │   ├── ErrorException.php
│   │           │   ├── Exception.php
│   │           │   ├── FatalErrorException.php
│   │           │   ├── ParseErrorException.php
│   │           │   ├── RuntimeException.php
│   │           │   ├── ThrowUpException.php
│   │           │   └── UnexpectedTargetException.php
│   │           ├── ExecutionClosure.php
│   │           ├── ExecutionLoop
│   │           │   ├── AbstractListener.php
│   │           │   ├── Listener.php
│   │           │   ├── ProcessForker.php
│   │           │   └── RunkitReloader.php
│   │           ├── ExecutionLoopClosure.php
│   │           ├── Formatter
│   │           │   ├── CodeFormatter.php
│   │           │   ├── DocblockFormatter.php
│   │           │   ├── ReflectorFormatter.php
│   │           │   ├── SignatureFormatter.php
│   │           │   └── TraceFormatter.php
│   │           ├── functions.php
│   │           ├── Input
│   │           │   ├── CodeArgument.php
│   │           │   ├── FilterOptions.php
│   │           │   ├── ShellInput.php
│   │           │   └── SilentInput.php
│   │           ├── Output
│   │           │   ├── OutputPager.php
│   │           │   ├── PassthruPager.php
│   │           │   ├── ProcOutputPager.php
│   │           │   ├── ShellOutput.php
│   │           │   └── Theme.php
│   │           ├── ParserFactory.php
│   │           ├── Readline
│   │           │   ├── GNUReadline.php
│   │           │   ├── Hoa
│   │           │   │   ├── AutocompleterAggregate.php
│   │           │   │   ├── AutocompleterPath.php
│   │           │   │   ├── Autocompleter.php
│   │           │   │   ├── AutocompleterWord.php
│   │           │   │   ├── ConsoleCursor.php
│   │           │   │   ├── ConsoleException.php
│   │           │   │   ├── ConsoleInput.php
│   │           │   │   ├── ConsoleOutput.php
│   │           │   │   ├── Console.php
│   │           │   │   ├── ConsoleProcessus.php
│   │           │   │   ├── ConsoleTput.php
│   │           │   │   ├── ConsoleWindow.php
│   │           │   │   ├── EventBucket.php
│   │           │   │   ├── EventException.php
│   │           │   │   ├── EventListenable.php
│   │           │   │   ├── EventListener.php
│   │           │   │   ├── EventListens.php
│   │           │   │   ├── Event.php
│   │           │   │   ├── EventSource.php
│   │           │   │   ├── ExceptionIdle.php
│   │           │   │   ├── Exception.php
│   │           │   │   ├── FileDirectory.php
│   │           │   │   ├── FileDoesNotExistException.php
│   │           │   │   ├── FileException.php
│   │           │   │   ├── FileFinder.php
│   │           │   │   ├── FileGeneric.php
│   │           │   │   ├── FileLink.php
│   │           │   │   ├── FileLinkRead.php
│   │           │   │   ├── FileLinkReadWrite.php
│   │           │   │   ├── File.php
│   │           │   │   ├── FileRead.php
│   │           │   │   ├── FileReadWrite.php
│   │           │   │   ├── IStream.php
│   │           │   │   ├── IteratorFileSystem.php
│   │           │   │   ├── IteratorRecursiveDirectory.php
│   │           │   │   ├── IteratorSplFileInfo.php
│   │           │   │   ├── ProtocolException.php
│   │           │   │   ├── ProtocolNodeLibrary.php
│   │           │   │   ├── ProtocolNode.php
│   │           │   │   ├── Protocol.php
│   │           │   │   ├── ProtocolWrapper.php
│   │           │   │   ├── Readline.php
│   │           │   │   ├── StreamBufferable.php
│   │           │   │   ├── StreamContext.php
│   │           │   │   ├── StreamException.php
│   │           │   │   ├── StreamIn.php
│   │           │   │   ├── StreamLockable.php
│   │           │   │   ├── StreamOut.php
│   │           │   │   ├── StreamPathable.php
│   │           │   │   ├── Stream.php
│   │           │   │   ├── StreamPointable.php
│   │           │   │   ├── StreamStatable.php
│   │           │   │   ├── StreamTouchable.php
│   │           │   │   ├── Terminfo
│   │           │   │   │   ├── 77
│   │           │   │   │   │   └── windows-ansi
│   │           │   │   │   └── 78
│   │           │   │   │       ├── xterm
│   │           │   │   │       └── xterm-256color
│   │           │   │   ├── Ustring.php
│   │           │   │   └── Xcallable.php
│   │           │   ├── Libedit.php
│   │           │   ├── Readline.php
│   │           │   ├── Transient.php
│   │           │   └── Userland.php
│   │           ├── Reflection
│   │           │   ├── ReflectionConstant.php
│   │           │   ├── ReflectionLanguageConstructParameter.php
│   │           │   ├── ReflectionLanguageConstruct.php
│   │           │   └── ReflectionNamespace.php
│   │           ├── Shell.php
│   │           ├── Sudo
│   │           │   └── SudoVisitor.php
│   │           ├── Sudo.php
│   │           ├── SuperglobalsEnv.php
│   │           ├── SystemEnv.php
│   │           ├── TabCompletion
│   │           │   ├── AutoCompleter.php
│   │           │   └── Matcher
│   │           │       ├── AbstractContextAwareMatcher.php
│   │           │       ├── AbstractDefaultParametersMatcher.php
│   │           │       ├── AbstractMatcher.php
│   │           │       ├── ClassAttributesMatcher.php
│   │           │       ├── ClassMethodDefaultParametersMatcher.php
│   │           │       ├── ClassMethodsMatcher.php
│   │           │       ├── ClassNamesMatcher.php
│   │           │       ├── CommandsMatcher.php
│   │           │       ├── ConstantsMatcher.php
│   │           │       ├── FunctionDefaultParametersMatcher.php
│   │           │       ├── FunctionsMatcher.php
│   │           │       ├── KeywordsMatcher.php
│   │           │       ├── MongoClientMatcher.php
│   │           │       ├── MongoDatabaseMatcher.php
│   │           │       ├── ObjectAttributesMatcher.php
│   │           │       ├── ObjectMethodDefaultParametersMatcher.php
│   │           │       ├── ObjectMethodsMatcher.php
│   │           │       └── VariablesMatcher.php
│   │           ├── Util
│   │           │   ├── Docblock.php
│   │           │   ├── Json.php
│   │           │   ├── Mirror.php
│   │           │   └── Str.php
│   │           ├── VarDumper
│   │           │   ├── Cloner.php
│   │           │   ├── Dumper.php
│   │           │   ├── PresenterAware.php
│   │           │   └── Presenter.php
│   │           └── VersionUpdater
│   │               ├── Checker.php
│   │               ├── Downloader
│   │               │   ├── CurlDownloader.php
│   │               │   ├── Factory.php
│   │               │   └── FileDownloader.php
│   │               ├── Downloader.php
│   │               ├── GitHubChecker.php
│   │               ├── Installer.php
│   │               ├── IntervalChecker.php
│   │               ├── NoopChecker.php
│   │               └── SelfUpdate.php
│   ├── ralouphie
│   │   └── getallheaders
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           └── getallheaders.php
│   ├── ramsey
│   │   ├── collection
│   │   │   ├── composer.json
│   │   │   ├── conventional-commits.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── AbstractArray.php
│   │   │       ├── AbstractCollection.php
│   │   │       ├── AbstractSet.php
│   │   │       ├── ArrayInterface.php
│   │   │       ├── CollectionInterface.php
│   │   │       ├── Collection.php
│   │   │       ├── DoubleEndedQueueInterface.php
│   │   │       ├── DoubleEndedQueue.php
│   │   │       ├── Exception
│   │   │       │   ├── CollectionException.php
│   │   │       │   ├── CollectionMismatchException.php
│   │   │       │   ├── InvalidArgumentException.php
│   │   │       │   ├── InvalidPropertyOrMethod.php
│   │   │       │   ├── NoSuchElementException.php
│   │   │       │   ├── OutOfBoundsException.php
│   │   │       │   └── UnsupportedOperationException.php
│   │   │       ├── GenericArray.php
│   │   │       ├── Map
│   │   │       │   ├── AbstractMap.php
│   │   │       │   ├── AbstractTypedMap.php
│   │   │       │   ├── AssociativeArrayMap.php
│   │   │       │   ├── MapInterface.php
│   │   │       │   ├── NamedParameterMap.php
│   │   │       │   ├── TypedMapInterface.php
│   │   │       │   └── TypedMap.php
│   │   │       ├── QueueInterface.php
│   │   │       ├── Queue.php
│   │   │       ├── Set.php
│   │   │       ├── Sort.php
│   │   │       └── Tool
│   │   │           ├── TypeTrait.php
│   │   │           ├── ValueExtractorTrait.php
│   │   │           └── ValueToStringTrait.php
│   │   └── uuid
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── BinaryUtils.php
│   │           ├── Builder
│   │           │   ├── BuilderCollection.php
│   │           │   ├── DefaultUuidBuilder.php
│   │           │   ├── DegradedUuidBuilder.php
│   │           │   ├── FallbackBuilder.php
│   │           │   └── UuidBuilderInterface.php
│   │           ├── Codec
│   │           │   ├── CodecInterface.php
│   │           │   ├── GuidStringCodec.php
│   │           │   ├── OrderedTimeCodec.php
│   │           │   ├── StringCodec.php
│   │           │   ├── TimestampFirstCombCodec.php
│   │           │   └── TimestampLastCombCodec.php
│   │           ├── Converter
│   │           │   ├── Number
│   │           │   │   ├── BigNumberConverter.php
│   │           │   │   ├── DegradedNumberConverter.php
│   │           │   │   └── GenericNumberConverter.php
│   │           │   ├── NumberConverterInterface.php
│   │           │   ├── Time
│   │           │   │   ├── BigNumberTimeConverter.php
│   │           │   │   ├── DegradedTimeConverter.php
│   │           │   │   ├── GenericTimeConverter.php
│   │           │   │   ├── PhpTimeConverter.php
│   │           │   │   └── UnixTimeConverter.php
│   │           │   └── TimeConverterInterface.php
│   │           ├── DegradedUuid.php
│   │           ├── DeprecatedUuidInterface.php
│   │           ├── DeprecatedUuidMethodsTrait.php
│   │           ├── Exception
│   │           │   ├── BuilderNotFoundException.php
│   │           │   ├── DateTimeException.php
│   │           │   ├── DceSecurityException.php
│   │           │   ├── InvalidArgumentException.php
│   │           │   ├── InvalidBytesException.php
│   │           │   ├── InvalidUuidStringException.php
│   │           │   ├── NameException.php
│   │           │   ├── NodeException.php
│   │           │   ├── RandomSourceException.php
│   │           │   ├── TimeSourceException.php
│   │           │   ├── UnableToBuildUuidException.php
│   │           │   ├── UnsupportedOperationException.php
│   │           │   └── UuidExceptionInterface.php
│   │           ├── FeatureSet.php
│   │           ├── Fields
│   │           │   ├── FieldsInterface.php
│   │           │   └── SerializableFieldsTrait.php
│   │           ├── functions.php
│   │           ├── Generator
│   │           │   ├── CombGenerator.php
│   │           │   ├── DceSecurityGeneratorInterface.php
│   │           │   ├── DceSecurityGenerator.php
│   │           │   ├── DefaultNameGenerator.php
│   │           │   ├── DefaultTimeGenerator.php
│   │           │   ├── NameGeneratorFactory.php
│   │           │   ├── NameGeneratorInterface.php
│   │           │   ├── PeclUuidNameGenerator.php
│   │           │   ├── PeclUuidRandomGenerator.php
│   │           │   ├── PeclUuidTimeGenerator.php
│   │           │   ├── RandomBytesGenerator.php
│   │           │   ├── RandomGeneratorFactory.php
│   │           │   ├── RandomGeneratorInterface.php
│   │           │   ├── RandomLibAdapter.php
│   │           │   ├── TimeGeneratorFactory.php
│   │           │   ├── TimeGeneratorInterface.php
│   │           │   └── UnixTimeGenerator.php
│   │           ├── Guid
│   │           │   ├── Fields.php
│   │           │   ├── GuidBuilder.php
│   │           │   └── Guid.php
│   │           ├── Lazy
│   │           │   └── LazyUuidFromString.php
│   │           ├── Math
│   │           │   ├── BrickMathCalculator.php
│   │           │   ├── CalculatorInterface.php
│   │           │   └── RoundingMode.php
│   │           ├── Nonstandard
│   │           │   ├── Fields.php
│   │           │   ├── UuidBuilder.php
│   │           │   ├── Uuid.php
│   │           │   └── UuidV6.php
│   │           ├── Provider
│   │           │   ├── Dce
│   │           │   │   └── SystemDceSecurityProvider.php
│   │           │   ├── DceSecurityProviderInterface.php
│   │           │   ├── Node
│   │           │   │   ├── FallbackNodeProvider.php
│   │           │   │   ├── NodeProviderCollection.php
│   │           │   │   ├── RandomNodeProvider.php
│   │           │   │   ├── StaticNodeProvider.php
│   │           │   │   └── SystemNodeProvider.php
│   │           │   ├── NodeProviderInterface.php
│   │           │   ├── Time
│   │           │   │   ├── FixedTimeProvider.php
│   │           │   │   └── SystemTimeProvider.php
│   │           │   └── TimeProviderInterface.php
│   │           ├── Rfc4122
│   │           │   ├── FieldsInterface.php
│   │           │   ├── Fields.php
│   │           │   ├── MaxTrait.php
│   │           │   ├── MaxUuid.php
│   │           │   ├── NilTrait.php
│   │           │   ├── NilUuid.php
│   │           │   ├── TimeTrait.php
│   │           │   ├── UuidBuilder.php
│   │           │   ├── UuidInterface.php
│   │           │   ├── UuidV1.php
│   │           │   ├── UuidV2.php
│   │           │   ├── UuidV3.php
│   │           │   ├── UuidV4.php
│   │           │   ├── UuidV5.php
│   │           │   ├── UuidV6.php
│   │           │   ├── UuidV7.php
│   │           │   ├── UuidV8.php
│   │           │   ├── Validator.php
│   │           │   ├── VariantTrait.php
│   │           │   └── VersionTrait.php
│   │           ├── Type
│   │           │   ├── Decimal.php
│   │           │   ├── Hexadecimal.php
│   │           │   ├── Integer.php
│   │           │   ├── NumberInterface.php
│   │           │   ├── Time.php
│   │           │   └── TypeInterface.php
│   │           ├── UuidFactoryInterface.php
│   │           ├── UuidFactory.php
│   │           ├── UuidInterface.php
│   │           ├── Uuid.php
│   │           └── Validator
│   │               ├── GenericValidator.php
│   │               └── ValidatorInterface.php
│   ├── sebastian
│   │   ├── cli-parser
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exceptions
│   │   │       │   ├── AmbiguousOptionException.php
│   │   │       │   ├── Exception.php
│   │   │       │   ├── OptionDoesNotAllowArgumentException.php
│   │   │       │   ├── RequiredOptionArgumentMissingException.php
│   │   │       │   └── UnknownOptionException.php
│   │   │       └── Parser.php
│   │   ├── code-unit
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ClassMethodUnit.php
│   │   │       ├── ClassUnit.php
│   │   │       ├── CodeUnitCollectionIterator.php
│   │   │       ├── CodeUnitCollection.php
│   │   │       ├── CodeUnit.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   ├── InvalidCodeUnitException.php
│   │   │       │   ├── NoTraitException.php
│   │   │       │   └── ReflectionException.php
│   │   │       ├── FileUnit.php
│   │   │       ├── FunctionUnit.php
│   │   │       ├── InterfaceMethodUnit.php
│   │   │       ├── InterfaceUnit.php
│   │   │       ├── Mapper.php
│   │   │       ├── TraitMethodUnit.php
│   │   │       └── TraitUnit.php
│   │   ├── code-unit-reverse-lookup
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Wizard.php
│   │   ├── comparator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── ArrayComparator.php
│   │   │       ├── Comparator.php
│   │   │       ├── ComparisonFailure.php
│   │   │       ├── DateTimeComparator.php
│   │   │       ├── DOMNodeComparator.php
│   │   │       ├── ExceptionComparator.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── Factory.php
│   │   │       ├── MockObjectComparator.php
│   │   │       ├── NumericComparator.php
│   │   │       ├── ObjectComparator.php
│   │   │       ├── ResourceComparator.php
│   │   │       ├── ScalarComparator.php
│   │   │       ├── SplObjectStorageComparator.php
│   │   │       └── TypeComparator.php
│   │   ├── complexity
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Calculator.php
│   │   │       ├── Complexity
│   │   │       │   ├── ComplexityCollectionIterator.php
│   │   │       │   ├── ComplexityCollection.php
│   │   │       │   └── Complexity.php
│   │   │       ├── Exception
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       └── Visitor
│   │   │           ├── ComplexityCalculatingVisitor.php
│   │   │           └── CyclomaticComplexityCalculatingVisitor.php
│   │   ├── diff
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Chunk.php
│   │   │       ├── Differ.php
│   │   │       ├── Diff.php
│   │   │       ├── Exception
│   │   │       │   ├── ConfigurationException.php
│   │   │       │   ├── Exception.php
│   │   │       │   └── InvalidArgumentException.php
│   │   │       ├── Line.php
│   │   │       ├── LongestCommonSubsequenceCalculator.php
│   │   │       ├── MemoryEfficientLongestCommonSubsequenceCalculator.php
│   │   │       ├── Output
│   │   │       │   ├── AbstractChunkOutputBuilder.php
│   │   │       │   ├── DiffOnlyOutputBuilder.php
│   │   │       │   ├── DiffOutputBuilderInterface.php
│   │   │       │   ├── StrictUnifiedDiffOutputBuilder.php
│   │   │       │   └── UnifiedDiffOutputBuilder.php
│   │   │       ├── Parser.php
│   │   │       └── TimeEfficientLongestCommonSubsequenceCalculator.php
│   │   ├── environment
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Console.php
│   │   │       └── Runtime.php
│   │   ├── exporter
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Exporter.php
│   │   ├── global-state
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── CodeExporter.php
│   │   │       ├── exceptions
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── ExcludeList.php
│   │   │       ├── Restorer.php
│   │   │       └── Snapshot.php
│   │   ├── lines-of-code
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── Counter.php
│   │   │       ├── Exception
│   │   │       │   ├── Exception.php
│   │   │       │   ├── IllogicalValuesException.php
│   │   │       │   ├── NegativeValueException.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── LineCountingVisitor.php
│   │   │       └── LinesOfCode.php
│   │   ├── object-enumerator
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── phpunit.xml
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Enumerator.php
│   │   ├── object-reflector
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── ObjectReflector.php
│   │   ├── recursion-context
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       └── Context.php
│   │   ├── type
│   │   │   ├── ChangeLog.md
│   │   │   ├── composer.json
│   │   │   ├── infection.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── SECURITY.md
│   │   │   └── src
│   │   │       ├── exception
│   │   │       │   ├── Exception.php
│   │   │       │   └── RuntimeException.php
│   │   │       ├── Parameter.php
│   │   │       ├── ReflectionMapper.php
│   │   │       ├── type
│   │   │       │   ├── CallableType.php
│   │   │       │   ├── FalseType.php
│   │   │       │   ├── GenericObjectType.php
│   │   │       │   ├── IntersectionType.php
│   │   │       │   ├── IterableType.php
│   │   │       │   ├── MixedType.php
│   │   │       │   ├── NeverType.php
│   │   │       │   ├── NullType.php
│   │   │       │   ├── ObjectType.php
│   │   │       │   ├── SimpleType.php
│   │   │       │   ├── StaticType.php
│   │   │       │   ├── TrueType.php
│   │   │       │   ├── Type.php
│   │   │       │   ├── UnionType.php
│   │   │       │   ├── UnknownType.php
│   │   │       │   └── VoidType.php
│   │   │       └── TypeName.php
│   │   └── version
│   │       ├── ChangeLog.md
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       ├── README.md
│   │       ├── SECURITY.md
│   │       └── src
│   │           └── Version.php
│   ├── spatie
│   │   ├── backtrace
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Arguments
│   │   │       │   ├── ArgumentReducers.php
│   │   │       │   ├── ProvidedArgument.php
│   │   │       │   ├── ReduceArgumentPayloadAction.php
│   │   │       │   ├── ReduceArgumentsAction.php
│   │   │       │   ├── ReducedArgument
│   │   │       │   │   ├── ReducedArgumentContract.php
│   │   │       │   │   ├── ReducedArgument.php
│   │   │       │   │   ├── TruncatedReducedArgument.php
│   │   │       │   │   ├── UnReducedArgument.php
│   │   │       │   │   └── VariadicReducedArgument.php
│   │   │       │   └── Reducers
│   │   │       │       ├── ArgumentReducer.php
│   │   │       │       ├── ArrayArgumentReducer.php
│   │   │       │       ├── BaseTypeArgumentReducer.php
│   │   │       │       ├── ClosureArgumentReducer.php
│   │   │       │       ├── DateTimeArgumentReducer.php
│   │   │       │       ├── DateTimeZoneArgumentReducer.php
│   │   │       │       ├── EnumArgumentReducer.php
│   │   │       │       ├── MinimalArrayArgumentReducer.php
│   │   │       │       ├── SensitiveParameterArrayReducer.php
│   │   │       │       ├── StdClassArgumentReducer.php
│   │   │       │       ├── StringableArgumentReducer.php
│   │   │       │       └── SymphonyRequestArgumentReducer.php
│   │   │       ├── Backtrace.php
│   │   │       ├── CodeSnippets
│   │   │       │   ├── CodeSnippet.php
│   │   │       │   ├── FileSnippetProvider.php
│   │   │       │   ├── LaravelSerializableClosureSnippetProvider.php
│   │   │       │   ├── NullSnippetProvider.php
│   │   │       │   └── SnippetProvider.php
│   │   │       └── Frame.php
│   │   ├── error-solutions
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── legacy
│   │   │   │   ├── ignition
│   │   │   │   │   ├── Contracts
│   │   │   │   │   │   ├── BaseSolution.php
│   │   │   │   │   │   ├── HasSolutionsForThrowable.php
│   │   │   │   │   │   ├── ProvidesSolution.php
│   │   │   │   │   │   ├── RunnableSolution.php
│   │   │   │   │   │   ├── Solution.php
│   │   │   │   │   │   └── SolutionProviderRepository.php
│   │   │   │   │   └── Solutions
│   │   │   │   │       ├── OpenAi
│   │   │   │   │       │   ├── DummyCache.php
│   │   │   │   │       │   ├── OpenAiPromptViewModel.php
│   │   │   │   │       │   ├── OpenAiSolution.php
│   │   │   │   │       │   ├── OpenAiSolutionProvider.php
│   │   │   │   │       │   └── OpenAiSolutionResponse.php
│   │   │   │   │       ├── SolutionProviders
│   │   │   │   │       │   ├── BadMethodCallSolutionProvider.php
│   │   │   │   │       │   ├── MergeConflictSolutionProvider.php
│   │   │   │   │       │   ├── SolutionProviderRepository.php
│   │   │   │   │       │   └── UndefinedPropertySolutionProvider.php
│   │   │   │   │       ├── SolutionTransformer.php
│   │   │   │   │       ├── SuggestCorrectVariableNameSolution.php
│   │   │   │   │       └── SuggestImportSolution.php
│   │   │   │   └── laravel-ignition
│   │   │   │       ├── Solutions
│   │   │   │       │   ├── GenerateAppKeySolution.php
│   │   │   │       │   ├── LivewireDiscoverSolution.php
│   │   │   │       │   ├── MakeViewVariableOptionalSolution.php
│   │   │   │       │   ├── RunMigrationsSolution.php
│   │   │   │       │   ├── SolutionProviders
│   │   │   │       │   │   ├── DefaultDbNameSolutionProvider.php
│   │   │   │       │   │   ├── GenericLaravelExceptionSolutionProvider.php
│   │   │   │       │   │   ├── IncorrectValetDbCredentialsSolutionProvider.php
│   │   │   │       │   │   ├── InvalidRouteActionSolutionProvider.php
│   │   │   │       │   │   ├── LazyLoadingViolationSolutionProvider.php
│   │   │   │       │   │   ├── MissingAppKeySolutionProvider.php
│   │   │   │       │   │   ├── MissingColumnSolutionProvider.php
│   │   │   │       │   │   ├── MissingImportSolutionProvider.php
│   │   │   │       │   │   ├── MissingLivewireComponentSolutionProvider.php
│   │   │   │       │   │   ├── MissingMixManifestSolutionProvider.php
│   │   │   │       │   │   ├── MissingViteManifestSolutionProvider.php
│   │   │   │       │   │   ├── OpenAiSolutionProvider.php
│   │   │   │       │   │   ├── RouteNotDefinedSolutionProvider.php
│   │   │   │       │   │   ├── RunningLaravelDuskInProductionProvider.php
│   │   │   │       │   │   ├── SailNetworkSolutionProvider.php
│   │   │   │       │   │   ├── SolutionProviderRepository.php
│   │   │   │       │   │   ├── TableNotFoundSolutionProvider.php
│   │   │   │       │   │   ├── UndefinedLivewireMethodSolutionProvider.php
│   │   │   │       │   │   ├── UndefinedLivewirePropertySolutionProvider.php
│   │   │   │       │   │   ├── UndefinedViewVariableSolutionProvider.php
│   │   │   │       │   │   ├── UnknownMariadbCollationSolutionProvider.php
│   │   │   │       │   │   ├── UnknownMysql8CollationSolutionProvider.php
│   │   │   │       │   │   ├── UnknownValidationSolutionProvider.php
│   │   │   │       │   │   └── ViewNotFoundSolutionProvider.php
│   │   │   │       │   ├── SuggestCorrectVariableNameSolution.php
│   │   │   │       │   ├── SuggestImportSolution.php
│   │   │   │       │   ├── SuggestLivewireMethodNameSolution.php
│   │   │   │       │   ├── SuggestLivewirePropertyNameSolution.php
│   │   │   │       │   ├── SuggestUsingCorrectDbNameSolution.php
│   │   │   │       │   ├── SuggestUsingMariadbDatabaseSolution.php
│   │   │   │       │   ├── SuggestUsingMysql8DatabaseSolution.php
│   │   │   │       │   └── UseDefaultValetDbCredentialsSolution.php
│   │   │   │       └── Support
│   │   │   │           └── StringComparator.php
│   │   │   ├── LICENSE.md
│   │   │   ├── phpstan-baseline.neon
│   │   │   ├── phpstan.neon.dist
│   │   │   ├── README.md
│   │   │   ├── resources
│   │   │   │   └── views
│   │   │   │       └── aiPrompt.php
│   │   │   └── src
│   │   │       ├── Contracts
│   │   │       │   ├── BaseSolution.php
│   │   │       │   ├── HasSolutionsForThrowable.php
│   │   │       │   ├── ProvidesSolution.php
│   │   │       │   ├── RunnableSolution.php
│   │   │       │   ├── Solution.php
│   │   │       │   └── SolutionProviderRepository.php
│   │   │       ├── DiscoverSolutionProviders.php
│   │   │       ├── SolutionProviderRepository.php
│   │   │       ├── SolutionProviders
│   │   │       │   ├── BadMethodCallSolutionProvider.php
│   │   │       │   ├── Laravel
│   │   │       │   │   ├── DefaultDbNameSolutionProvider.php
│   │   │       │   │   ├── GenericLaravelExceptionSolutionProvider.php
│   │   │       │   │   ├── IncorrectValetDbCredentialsSolutionProvider.php
│   │   │       │   │   ├── InvalidRouteActionSolutionProvider.php
│   │   │       │   │   ├── LazyLoadingViolationSolutionProvider.php
│   │   │       │   │   ├── MissingAppKeySolutionProvider.php
│   │   │       │   │   ├── MissingColumnSolutionProvider.php
│   │   │       │   │   ├── MissingImportSolutionProvider.php
│   │   │       │   │   ├── MissingLivewireComponentSolutionProvider.php
│   │   │       │   │   ├── MissingMixManifestSolutionProvider.php
│   │   │       │   │   ├── MissingViteManifestSolutionProvider.php
│   │   │       │   │   ├── OpenAiSolutionProvider.php
│   │   │       │   │   ├── RouteNotDefinedSolutionProvider.php
│   │   │       │   │   ├── RunningLaravelDuskInProductionProvider.php
│   │   │       │   │   ├── SailNetworkSolutionProvider.php
│   │   │       │   │   ├── TableNotFoundSolutionProvider.php
│   │   │       │   │   ├── UndefinedLivewireMethodSolutionProvider.php
│   │   │       │   │   ├── UndefinedLivewirePropertySolutionProvider.php
│   │   │       │   │   ├── UndefinedViewVariableSolutionProvider.php
│   │   │       │   │   ├── UnknownMariadbCollationSolutionProvider.php
│   │   │       │   │   ├── UnknownMysql8CollationSolutionProvider.php
│   │   │       │   │   ├── UnknownValidationSolutionProvider.php
│   │   │       │   │   └── ViewNotFoundSolutionProvider.php
│   │   │       │   ├── MergeConflictSolutionProvider.php
│   │   │       │   └── UndefinedPropertySolutionProvider.php
│   │   │       ├── Solutions
│   │   │       │   ├── Concerns
│   │   │       │   │   └── IsProvidedByFlare.php
│   │   │       │   ├── Laravel
│   │   │       │   │   ├── GenerateAppKeySolution.php
│   │   │       │   │   ├── LivewireDiscoverSolution.php
│   │   │       │   │   ├── MakeViewVariableOptionalSolution.php
│   │   │       │   │   ├── RunMigrationsSolution.php
│   │   │       │   │   ├── SuggestLivewireMethodNameSolution.php
│   │   │       │   │   ├── SuggestLivewirePropertyNameSolution.php
│   │   │       │   │   ├── SuggestUsingCorrectDbNameSolution.php
│   │   │       │   │   ├── SuggestUsingMariadbDatabaseSolution.php
│   │   │       │   │   ├── SuggestUsingMysql8DatabaseSolution.php
│   │   │       │   │   └── UseDefaultValetDbCredentialsSolution.php
│   │   │       │   ├── OpenAi
│   │   │       │   │   ├── DummyCache.php
│   │   │       │   │   ├── OpenAiPromptViewModel.php
│   │   │       │   │   ├── OpenAiSolution.php
│   │   │       │   │   ├── OpenAiSolutionProvider.php
│   │   │       │   │   └── OpenAiSolutionResponse.php
│   │   │       │   ├── SolutionTransformer.php
│   │   │       │   ├── SuggestCorrectVariableNameSolution.php
│   │   │       │   └── SuggestImportSolution.php
│   │   │       └── Support
│   │   │           ├── AiPromptRenderer.php
│   │   │           └── Laravel
│   │   │               ├── Composer
│   │   │               │   ├── ComposerClassMap.php
│   │   │               │   ├── Composer.php
│   │   │               │   └── FakeComposer.php
│   │   │               ├── LaravelVersion.php
│   │   │               ├── LivewireComponentParser.php
│   │   │               └── StringComparator.php
│   │   ├── flare-client-php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   └── src
│   │   │       ├── Api.php
│   │   │       ├── Concerns
│   │   │       │   ├── HasContext.php
│   │   │       │   └── UsesTime.php
│   │   │       ├── Context
│   │   │       │   ├── BaseContextProviderDetector.php
│   │   │       │   ├── ConsoleContextProvider.php
│   │   │       │   ├── ContextProviderDetector.php
│   │   │       │   ├── ContextProvider.php
│   │   │       │   └── RequestContextProvider.php
│   │   │       ├── Contracts
│   │   │       │   └── ProvidesFlareContext.php
│   │   │       ├── Enums
│   │   │       │   └── MessageLevels.php
│   │   │       ├── FlareMiddleware
│   │   │       │   ├── AddDocumentationLinks.php
│   │   │       │   ├── AddEnvironmentInformation.php
│   │   │       │   ├── AddGitInformation.php
│   │   │       │   ├── AddGlows.php
│   │   │       │   ├── AddNotifierName.php
│   │   │       │   ├── AddSolutions.php
│   │   │       │   ├── CensorRequestBodyFields.php
│   │   │       │   ├── CensorRequestHeaders.php
│   │   │       │   ├── FlareMiddleware.php
│   │   │       │   └── RemoveRequestIp.php
│   │   │       ├── Flare.php
│   │   │       ├── Frame.php
│   │   │       ├── Glows
│   │   │       │   ├── Glow.php
│   │   │       │   └── GlowRecorder.php
│   │   │       ├── helpers.php
│   │   │       ├── Http
│   │   │       │   ├── Client.php
│   │   │       │   ├── Exceptions
│   │   │       │   │   ├── BadResponseCode.php
│   │   │       │   │   ├── BadResponse.php
│   │   │       │   │   ├── InvalidData.php
│   │   │       │   │   ├── MissingParameter.php
│   │   │       │   │   └── NotFound.php
│   │   │       │   └── Response.php
│   │   │       ├── Report.php
│   │   │       ├── Solutions
│   │   │       │   └── ReportSolution.php
│   │   │       ├── Support
│   │   │       │   └── PhpStackFrameArgumentsFixer.php
│   │   │       ├── Time
│   │   │       │   ├── SystemTime.php
│   │   │       │   └── Time.php
│   │   │       ├── Truncation
│   │   │       │   ├── AbstractTruncationStrategy.php
│   │   │       │   ├── ReportTrimmer.php
│   │   │       │   ├── TrimContextItemsStrategy.php
│   │   │       │   ├── TrimStackFrameArgumentsStrategy.php
│   │   │       │   ├── TrimStringsStrategy.php
│   │   │       │   └── TruncationStrategy.php
│   │   │       └── View.php
│   │   ├── ignition
│   │   │   ├── composer.json
│   │   │   ├── LICENSE.md
│   │   │   ├── README.md
│   │   │   ├── resources
│   │   │   │   ├── compiled
│   │   │   │   │   ├── ignition.css
│   │   │   │   │   └── ignition.js
│   │   │   │   └── views
│   │   │   │       ├── aiPrompt.php
│   │   │   │       └── errorPage.php
│   │   │   └── src
│   │   │       ├── Config
│   │   │       │   ├── FileConfigManager.php
│   │   │       │   └── IgnitionConfig.php
│   │   │       ├── Contracts
│   │   │       │   └── ConfigManager.php
│   │   │       ├── ErrorPage
│   │   │       │   ├── ErrorPageViewModel.php
│   │   │       │   └── Renderer.php
│   │   │       └── Ignition.php
│   │   └── laravel-ignition
│   │       ├── composer.json
│   │       ├── config
│   │       │   ├── flare.php
│   │       │   └── ignition.php
│   │       ├── LICENSE.md
│   │       ├── README.md
│   │       └── src
│   │           ├── ArgumentReducers
│   │           │   ├── CollectionArgumentReducer.php
│   │           │   └── ModelArgumentReducer.php
│   │           ├── Commands
│   │           │   ├── SolutionMakeCommand.php
│   │           │   ├── SolutionProviderMakeCommand.php
│   │           │   ├── stubs
│   │           │   │   ├── runnable-solution.stub
│   │           │   │   ├── solution-provider.stub
│   │           │   │   └── solution.stub
│   │           │   └── TestCommand.php
│   │           ├── ContextProviders
│   │           │   ├── LaravelConsoleContextProvider.php
│   │           │   ├── LaravelContextProviderDetector.php
│   │           │   ├── LaravelLivewireRequestContextProvider.php
│   │           │   └── LaravelRequestContextProvider.php
│   │           ├── Exceptions
│   │           │   ├── CannotExecuteSolutionForNonLocalIp.php
│   │           │   ├── InvalidConfig.php
│   │           │   ├── ViewException.php
│   │           │   └── ViewExceptionWithSolution.php
│   │           ├── Facades
│   │           │   └── Flare.php
│   │           ├── FlareMiddleware
│   │           │   ├── AddContext.php
│   │           │   ├── AddDumps.php
│   │           │   ├── AddEnvironmentInformation.php
│   │           │   ├── AddExceptionHandledStatus.php
│   │           │   ├── AddExceptionInformation.php
│   │           │   ├── AddJobs.php
│   │           │   ├── AddLogs.php
│   │           │   ├── AddNotifierName.php
│   │           │   └── AddQueries.php
│   │           ├── helpers.php
│   │           ├── Http
│   │           │   ├── Controllers
│   │           │   │   ├── ExecuteSolutionController.php
│   │           │   │   ├── HealthCheckController.php
│   │           │   │   └── UpdateConfigController.php
│   │           │   ├── Middleware
│   │           │   │   └── RunnableSolutionsEnabled.php
│   │           │   └── Requests
│   │           │       ├── ExecuteSolutionRequest.php
│   │           │       └── UpdateConfigRequest.php
│   │           ├── ignition-routes.php
│   │           ├── IgnitionServiceProvider.php
│   │           ├── Recorders
│   │           │   ├── DumpRecorder
│   │           │   │   ├── DumpHandler.php
│   │           │   │   ├── Dump.php
│   │           │   │   ├── DumpRecorder.php
│   │           │   │   ├── HtmlDumper.php
│   │           │   │   └── MultiDumpHandler.php
│   │           │   ├── JobRecorder
│   │           │   │   └── JobRecorder.php
│   │           │   ├── LogRecorder
│   │           │   │   ├── LogMessage.php
│   │           │   │   └── LogRecorder.php
│   │           │   └── QueryRecorder
│   │           │       ├── Query.php
│   │           │       └── QueryRecorder.php
│   │           ├── Renderers
│   │           │   ├── ErrorPageRenderer.php
│   │           │   └── IgnitionExceptionRenderer.php
│   │           ├── Solutions
│   │           │   └── SolutionTransformers
│   │           │       └── LaravelSolutionTransformer.php
│   │           ├── Support
│   │           │   ├── FlareLogHandler.php
│   │           │   ├── LaravelDocumentationLinkFinder.php
│   │           │   ├── LaravelVersion.php
│   │           │   ├── RunnableSolutionsGuard.php
│   │           │   └── SentReports.php
│   │           └── Views
│   │               ├── BladeSourceMapCompiler.php
│   │               └── ViewExceptionMapper.php
│   ├── symfony
│   │   ├── console
│   │   │   ├── Application.php
│   │   │   ├── Attribute
│   │   │   │   └── AsCommand.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CI
│   │   │   │   └── GithubActionReporter.php
│   │   │   ├── Color.php
│   │   │   ├── Command
│   │   │   │   ├── Command.php
│   │   │   │   ├── CompleteCommand.php
│   │   │   │   ├── DumpCompletionCommand.php
│   │   │   │   ├── HelpCommand.php
│   │   │   │   ├── LazyCommand.php
│   │   │   │   ├── ListCommand.php
│   │   │   │   ├── LockableTrait.php
│   │   │   │   ├── SignalableCommandInterface.php
│   │   │   │   └── TraceableCommand.php
│   │   │   ├── CommandLoader
│   │   │   │   ├── CommandLoaderInterface.php
│   │   │   │   ├── ContainerCommandLoader.php
│   │   │   │   └── FactoryCommandLoader.php
│   │   │   ├── Completion
│   │   │   │   ├── CompletionInput.php
│   │   │   │   ├── CompletionSuggestions.php
│   │   │   │   ├── Output
│   │   │   │   │   ├── BashCompletionOutput.php
│   │   │   │   │   ├── CompletionOutputInterface.php
│   │   │   │   │   ├── FishCompletionOutput.php
│   │   │   │   │   └── ZshCompletionOutput.php
│   │   │   │   └── Suggestion.php
│   │   │   ├── composer.json
│   │   │   ├── ConsoleEvents.php
│   │   │   ├── Cursor.php
│   │   │   ├── DataCollector
│   │   │   │   └── CommandDataCollector.php
│   │   │   ├── Debug
│   │   │   │   └── CliRequest.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddConsoleCommandPass.php
│   │   │   ├── Descriptor
│   │   │   │   ├── ApplicationDescription.php
│   │   │   │   ├── DescriptorInterface.php
│   │   │   │   ├── Descriptor.php
│   │   │   │   ├── JsonDescriptor.php
│   │   │   │   ├── MarkdownDescriptor.php
│   │   │   │   ├── ReStructuredTextDescriptor.php
│   │   │   │   ├── TextDescriptor.php
│   │   │   │   └── XmlDescriptor.php
│   │   │   ├── Event
│   │   │   │   ├── ConsoleCommandEvent.php
│   │   │   │   ├── ConsoleErrorEvent.php
│   │   │   │   ├── ConsoleEvent.php
│   │   │   │   ├── ConsoleSignalEvent.php
│   │   │   │   └── ConsoleTerminateEvent.php
│   │   │   ├── EventListener
│   │   │   │   └── ErrorListener.php
│   │   │   ├── Exception
│   │   │   │   ├── CommandNotFoundException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidOptionException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MissingInputException.php
│   │   │   │   ├── NamespaceNotFoundException.php
│   │   │   │   ├── RunCommandFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Formatter
│   │   │   │   ├── NullOutputFormatter.php
│   │   │   │   ├── NullOutputFormatterStyle.php
│   │   │   │   ├── OutputFormatterInterface.php
│   │   │   │   ├── OutputFormatter.php
│   │   │   │   ├── OutputFormatterStyleInterface.php
│   │   │   │   ├── OutputFormatterStyle.php
│   │   │   │   ├── OutputFormatterStyleStack.php
│   │   │   │   └── WrappableOutputFormatterInterface.php
│   │   │   ├── Helper
│   │   │   │   ├── DebugFormatterHelper.php
│   │   │   │   ├── DescriptorHelper.php
│   │   │   │   ├── Dumper.php
│   │   │   │   ├── FormatterHelper.php
│   │   │   │   ├── HelperInterface.php
│   │   │   │   ├── Helper.php
│   │   │   │   ├── HelperSet.php
│   │   │   │   ├── InputAwareHelper.php
│   │   │   │   ├── OutputWrapper.php
│   │   │   │   ├── ProcessHelper.php
│   │   │   │   ├── ProgressBar.php
│   │   │   │   ├── ProgressIndicator.php
│   │   │   │   ├── QuestionHelper.php
│   │   │   │   ├── SymfonyQuestionHelper.php
│   │   │   │   ├── TableCell.php
│   │   │   │   ├── TableCellStyle.php
│   │   │   │   ├── Table.php
│   │   │   │   ├── TableRows.php
│   │   │   │   ├── TableSeparator.php
│   │   │   │   └── TableStyle.php
│   │   │   ├── Input
│   │   │   │   ├── ArgvInput.php
│   │   │   │   ├── ArrayInput.php
│   │   │   │   ├── InputArgument.php
│   │   │   │   ├── InputAwareInterface.php
│   │   │   │   ├── InputDefinition.php
│   │   │   │   ├── InputInterface.php
│   │   │   │   ├── InputOption.php
│   │   │   │   ├── Input.php
│   │   │   │   ├── StreamableInputInterface.php
│   │   │   │   └── StringInput.php
│   │   │   ├── LICENSE
│   │   │   ├── Logger
│   │   │   │   └── ConsoleLogger.php
│   │   │   ├── Messenger
│   │   │   │   ├── RunCommandContext.php
│   │   │   │   ├── RunCommandMessageHandler.php
│   │   │   │   └── RunCommandMessage.php
│   │   │   ├── Output
│   │   │   │   ├── AnsiColorMode.php
│   │   │   │   ├── BufferedOutput.php
│   │   │   │   ├── ConsoleOutputInterface.php
│   │   │   │   ├── ConsoleOutput.php
│   │   │   │   ├── ConsoleSectionOutput.php
│   │   │   │   ├── NullOutput.php
│   │   │   │   ├── OutputInterface.php
│   │   │   │   ├── Output.php
│   │   │   │   ├── StreamOutput.php
│   │   │   │   └── TrimmedBufferOutput.php
│   │   │   ├── Question
│   │   │   │   ├── ChoiceQuestion.php
│   │   │   │   ├── ConfirmationQuestion.php
│   │   │   │   └── Question.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── hiddeninput.exe
│   │   │   │   ├── completion.bash
│   │   │   │   ├── completion.fish
│   │   │   │   └── completion.zsh
│   │   │   ├── SignalRegistry
│   │   │   │   ├── SignalMap.php
│   │   │   │   └── SignalRegistry.php
│   │   │   ├── SingleCommandApplication.php
│   │   │   ├── Style
│   │   │   │   ├── OutputStyle.php
│   │   │   │   ├── StyleInterface.php
│   │   │   │   └── SymfonyStyle.php
│   │   │   ├── Terminal.php
│   │   │   └── Tester
│   │   │       ├── ApplicationTester.php
│   │   │       ├── CommandCompletionTester.php
│   │   │       ├── CommandTester.php
│   │   │       ├── Constraint
│   │   │       │   └── CommandIsSuccessful.php
│   │   │       └── TesterTrait.php
│   │   ├── css-selector
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── CssSelectorConverter.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── ExpressionErrorException.php
│   │   │   │   ├── InternalErrorException.php
│   │   │   │   ├── ParseException.php
│   │   │   │   └── SyntaxErrorException.php
│   │   │   ├── LICENSE
│   │   │   ├── Node
│   │   │   │   ├── AbstractNode.php
│   │   │   │   ├── AttributeNode.php
│   │   │   │   ├── ClassNode.php
│   │   │   │   ├── CombinedSelectorNode.php
│   │   │   │   ├── ElementNode.php
│   │   │   │   ├── FunctionNode.php
│   │   │   │   ├── HashNode.php
│   │   │   │   ├── NegationNode.php
│   │   │   │   ├── NodeInterface.php
│   │   │   │   ├── PseudoNode.php
│   │   │   │   ├── SelectorNode.php
│   │   │   │   └── Specificity.php
│   │   │   ├── Parser
│   │   │   │   ├── Handler
│   │   │   │   │   ├── CommentHandler.php
│   │   │   │   │   ├── HandlerInterface.php
│   │   │   │   │   ├── HashHandler.php
│   │   │   │   │   ├── IdentifierHandler.php
│   │   │   │   │   ├── NumberHandler.php
│   │   │   │   │   ├── StringHandler.php
│   │   │   │   │   └── WhitespaceHandler.php
│   │   │   │   ├── ParserInterface.php
│   │   │   │   ├── Parser.php
│   │   │   │   ├── Reader.php
│   │   │   │   ├── Shortcut
│   │   │   │   │   ├── ClassParser.php
│   │   │   │   │   ├── ElementParser.php
│   │   │   │   │   ├── EmptyStringParser.php
│   │   │   │   │   └── HashParser.php
│   │   │   │   ├── Tokenizer
│   │   │   │   │   ├── TokenizerEscaping.php
│   │   │   │   │   ├── TokenizerPatterns.php
│   │   │   │   │   └── Tokenizer.php
│   │   │   │   ├── Token.php
│   │   │   │   └── TokenStream.php
│   │   │   ├── README.md
│   │   │   └── XPath
│   │   │       ├── Extension
│   │   │       │   ├── AbstractExtension.php
│   │   │       │   ├── AttributeMatchingExtension.php
│   │   │       │   ├── CombinationExtension.php
│   │   │       │   ├── ExtensionInterface.php
│   │   │       │   ├── FunctionExtension.php
│   │   │       │   ├── HtmlExtension.php
│   │   │       │   ├── NodeExtension.php
│   │   │       │   └── PseudoClassExtension.php
│   │   │       ├── TranslatorInterface.php
│   │   │       ├── Translator.php
│   │   │       └── XPathExpr.php
│   │   ├── deprecation-contracts
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── function.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── error-handler
│   │   │   ├── BufferingLogger.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── DebugClassLoader.php
│   │   │   ├── Debug.php
│   │   │   ├── Error
│   │   │   │   ├── ClassNotFoundError.php
│   │   │   │   ├── FatalError.php
│   │   │   │   ├── OutOfMemoryError.php
│   │   │   │   ├── UndefinedFunctionError.php
│   │   │   │   └── UndefinedMethodError.php
│   │   │   ├── ErrorEnhancer
│   │   │   │   ├── ClassNotFoundErrorEnhancer.php
│   │   │   │   ├── ErrorEnhancerInterface.php
│   │   │   │   ├── UndefinedFunctionErrorEnhancer.php
│   │   │   │   └── UndefinedMethodErrorEnhancer.php
│   │   │   ├── ErrorHandler.php
│   │   │   ├── ErrorRenderer
│   │   │   │   ├── CliErrorRenderer.php
│   │   │   │   ├── ErrorRendererInterface.php
│   │   │   │   ├── FileLinkFormatter.php
│   │   │   │   ├── HtmlErrorRenderer.php
│   │   │   │   └── SerializerErrorRenderer.php
│   │   │   ├── Exception
│   │   │   │   ├── FlattenException.php
│   │   │   │   └── SilencedErrorContext.php
│   │   │   ├── Internal
│   │   │   │   └── TentativeTypes.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── assets
│   │   │   │   │   ├── css
│   │   │   │   │   │   ├── error.css
│   │   │   │   │   │   ├── exception.css
│   │   │   │   │   │   └── exception_full.css
│   │   │   │   │   ├── images
│   │   │   │   │   │   ├── chevron-right.svg
│   │   │   │   │   │   ├── favicon.png.base64
│   │   │   │   │   │   ├── icon-book.svg
│   │   │   │   │   │   ├── icon-copy.svg
│   │   │   │   │   │   ├── icon-minus-square-o.svg
│   │   │   │   │   │   ├── icon-minus-square.svg
│   │   │   │   │   │   ├── icon-plus-square-o.svg
│   │   │   │   │   │   ├── icon-plus-square.svg
│   │   │   │   │   │   ├── icon-support.svg
│   │   │   │   │   │   ├── symfony-ghost.svg.php
│   │   │   │   │   │   └── symfony-logo.svg
│   │   │   │   │   └── js
│   │   │   │   │       └── exception.js
│   │   │   │   ├── bin
│   │   │   │   │   ├── extract-tentative-return-types.php
│   │   │   │   │   └── patch-type-declarations
│   │   │   │   └── views
│   │   │   │       ├── error.html.php
│   │   │   │       ├── exception_full.html.php
│   │   │   │       ├── exception.html.php
│   │   │   │       ├── logs.html.php
│   │   │   │       ├── trace.html.php
│   │   │   │       ├── traces.html.php
│   │   │   │       └── traces_text.html.php
│   │   │   └── ThrowableUtils.php
│   │   ├── event-dispatcher
│   │   │   ├── Attribute
│   │   │   │   └── AsEventListener.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Debug
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── WrappedListener.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddEventAliasesPass.php
│   │   │   │   └── RegisterListenersPass.php
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── EventDispatcher.php
│   │   │   ├── EventSubscriberInterface.php
│   │   │   ├── GenericEvent.php
│   │   │   ├── ImmutableEventDispatcher.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── event-dispatcher-contracts
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── EventDispatcherInterface.php
│   │   │   ├── Event.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── finder
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Comparator
│   │   │   │   ├── Comparator.php
│   │   │   │   ├── DateComparator.php
│   │   │   │   └── NumberComparator.php
│   │   │   ├── composer.json
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedException.php
│   │   │   │   └── DirectoryNotFoundException.php
│   │   │   ├── Finder.php
│   │   │   ├── Gitignore.php
│   │   │   ├── Glob.php
│   │   │   ├── Iterator
│   │   │   │   ├── CustomFilterIterator.php
│   │   │   │   ├── DateRangeFilterIterator.php
│   │   │   │   ├── DepthRangeFilterIterator.php
│   │   │   │   ├── ExcludeDirectoryFilterIterator.php
│   │   │   │   ├── FilecontentFilterIterator.php
│   │   │   │   ├── FilenameFilterIterator.php
│   │   │   │   ├── FileTypeFilterIterator.php
│   │   │   │   ├── LazyIterator.php
│   │   │   │   ├── MultiplePcreFilterIterator.php
│   │   │   │   ├── PathFilterIterator.php
│   │   │   │   ├── RecursiveDirectoryIterator.php
│   │   │   │   ├── SizeRangeFilterIterator.php
│   │   │   │   ├── SortableIterator.php
│   │   │   │   └── VcsIgnoredFilterIterator.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── SplFileInfo.php
│   │   ├── http-foundation
│   │   │   ├── AcceptHeaderItem.php
│   │   │   ├── AcceptHeader.php
│   │   │   ├── BinaryFileResponse.php
│   │   │   ├── ChainRequestMatcher.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Cookie.php
│   │   │   ├── Exception
│   │   │   │   ├── BadRequestException.php
│   │   │   │   ├── ConflictingHeadersException.php
│   │   │   │   ├── JsonException.php
│   │   │   │   ├── RequestExceptionInterface.php
│   │   │   │   ├── SessionNotFoundException.php
│   │   │   │   ├── SuspiciousOperationException.php
│   │   │   │   └── UnexpectedValueException.php
│   │   │   ├── ExpressionRequestMatcher.php
│   │   │   ├── File
│   │   │   │   ├── Exception
│   │   │   │   │   ├── AccessDeniedException.php
│   │   │   │   │   ├── CannotWriteFileException.php
│   │   │   │   │   ├── ExtensionFileException.php
│   │   │   │   │   ├── FileException.php
│   │   │   │   │   ├── FileNotFoundException.php
│   │   │   │   │   ├── FormSizeFileException.php
│   │   │   │   │   ├── IniSizeFileException.php
│   │   │   │   │   ├── NoFileException.php
│   │   │   │   │   ├── NoTmpDirFileException.php
│   │   │   │   │   ├── PartialFileException.php
│   │   │   │   │   ├── UnexpectedTypeException.php
│   │   │   │   │   └── UploadException.php
│   │   │   │   ├── File.php
│   │   │   │   ├── Stream.php
│   │   │   │   └── UploadedFile.php
│   │   │   ├── FileBag.php
│   │   │   ├── HeaderBag.php
│   │   │   ├── HeaderUtils.php
│   │   │   ├── InputBag.php
│   │   │   ├── IpUtils.php
│   │   │   ├── JsonResponse.php
│   │   │   ├── LICENSE
│   │   │   ├── ParameterBag.php
│   │   │   ├── RateLimiter
│   │   │   │   ├── AbstractRequestRateLimiter.php
│   │   │   │   ├── PeekableRequestRateLimiterInterface.php
│   │   │   │   └── RequestRateLimiterInterface.php
│   │   │   ├── README.md
│   │   │   ├── RedirectResponse.php
│   │   │   ├── RequestMatcher
│   │   │   │   ├── AttributesRequestMatcher.php
│   │   │   │   ├── ExpressionRequestMatcher.php
│   │   │   │   ├── HostRequestMatcher.php
│   │   │   │   ├── IpsRequestMatcher.php
│   │   │   │   ├── IsJsonRequestMatcher.php
│   │   │   │   ├── MethodRequestMatcher.php
│   │   │   │   ├── PathRequestMatcher.php
│   │   │   │   ├── PortRequestMatcher.php
│   │   │   │   └── SchemeRequestMatcher.php
│   │   │   ├── RequestMatcherInterface.php
│   │   │   ├── RequestMatcher.php
│   │   │   ├── Request.php
│   │   │   ├── RequestStack.php
│   │   │   ├── ResponseHeaderBag.php
│   │   │   ├── Response.php
│   │   │   ├── ServerBag.php
│   │   │   ├── Session
│   │   │   │   ├── Attribute
│   │   │   │   │   ├── AttributeBagInterface.php
│   │   │   │   │   └── AttributeBag.php
│   │   │   │   ├── Flash
│   │   │   │   │   ├── AutoExpireFlashBag.php
│   │   │   │   │   ├── FlashBagInterface.php
│   │   │   │   │   └── FlashBag.php
│   │   │   │   ├── FlashBagAwareSessionInterface.php
│   │   │   │   ├── SessionBagInterface.php
│   │   │   │   ├── SessionBagProxy.php
│   │   │   │   ├── SessionFactoryInterface.php
│   │   │   │   ├── SessionFactory.php
│   │   │   │   ├── SessionInterface.php
│   │   │   │   ├── Session.php
│   │   │   │   ├── SessionUtils.php
│   │   │   │   └── Storage
│   │   │   │       ├── Handler
│   │   │   │       │   ├── AbstractSessionHandler.php
│   │   │   │       │   ├── IdentityMarshaller.php
│   │   │   │       │   ├── MarshallingSessionHandler.php
│   │   │   │       │   ├── MemcachedSessionHandler.php
│   │   │   │       │   ├── MigratingSessionHandler.php
│   │   │   │       │   ├── MongoDbSessionHandler.php
│   │   │   │       │   ├── NativeFileSessionHandler.php
│   │   │   │       │   ├── NullSessionHandler.php
│   │   │   │       │   ├── PdoSessionHandler.php
│   │   │   │       │   ├── RedisSessionHandler.php
│   │   │   │       │   ├── SessionHandlerFactory.php
│   │   │   │       │   └── StrictSessionHandler.php
│   │   │   │       ├── MetadataBag.php
│   │   │   │       ├── MockArraySessionStorage.php
│   │   │   │       ├── MockFileSessionStorageFactory.php
│   │   │   │       ├── MockFileSessionStorage.php
│   │   │   │       ├── NativeSessionStorageFactory.php
│   │   │   │       ├── NativeSessionStorage.php
│   │   │   │       ├── PhpBridgeSessionStorageFactory.php
│   │   │   │       ├── PhpBridgeSessionStorage.php
│   │   │   │       ├── Proxy
│   │   │   │       │   ├── AbstractProxy.php
│   │   │   │       │   └── SessionHandlerProxy.php
│   │   │   │       ├── SessionStorageFactoryInterface.php
│   │   │   │       └── SessionStorageInterface.php
│   │   │   ├── StreamedJsonResponse.php
│   │   │   ├── StreamedResponse.php
│   │   │   ├── Test
│   │   │   │   └── Constraint
│   │   │   │       ├── RequestAttributeValueSame.php
│   │   │   │       ├── ResponseCookieValueSame.php
│   │   │   │       ├── ResponseFormatSame.php
│   │   │   │       ├── ResponseHasCookie.php
│   │   │   │       ├── ResponseHasHeader.php
│   │   │   │       ├── ResponseHeaderLocationSame.php
│   │   │   │       ├── ResponseHeaderSame.php
│   │   │   │       ├── ResponseIsRedirected.php
│   │   │   │       ├── ResponseIsSuccessful.php
│   │   │   │       ├── ResponseIsUnprocessable.php
│   │   │   │       └── ResponseStatusCodeSame.php
│   │   │   ├── UriSigner.php
│   │   │   └── UrlHelper.php
│   │   ├── http-kernel
│   │   │   ├── Attribute
│   │   │   │   ├── AsController.php
│   │   │   │   ├── AsTargetedValueResolver.php
│   │   │   │   ├── Cache.php
│   │   │   │   ├── MapDateTime.php
│   │   │   │   ├── MapQueryParameter.php
│   │   │   │   ├── MapQueryString.php
│   │   │   │   ├── MapRequestPayload.php
│   │   │   │   ├── ValueResolver.php
│   │   │   │   ├── WithHttpStatus.php
│   │   │   │   └── WithLogLevel.php
│   │   │   ├── Bundle
│   │   │   │   ├── AbstractBundle.php
│   │   │   │   ├── BundleExtension.php
│   │   │   │   ├── BundleInterface.php
│   │   │   │   └── Bundle.php
│   │   │   ├── CacheClearer
│   │   │   │   ├── CacheClearerInterface.php
│   │   │   │   ├── ChainCacheClearer.php
│   │   │   │   └── Psr6CacheClearer.php
│   │   │   ├── CacheWarmer
│   │   │   │   ├── CacheWarmerAggregate.php
│   │   │   │   ├── CacheWarmerInterface.php
│   │   │   │   ├── CacheWarmer.php
│   │   │   │   └── WarmableInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Config
│   │   │   │   └── FileLocator.php
│   │   │   ├── Controller
│   │   │   │   ├── ArgumentResolver
│   │   │   │   │   ├── BackedEnumValueResolver.php
│   │   │   │   │   ├── DateTimeValueResolver.php
│   │   │   │   │   ├── DefaultValueResolver.php
│   │   │   │   │   ├── NotTaggedControllerValueResolver.php
│   │   │   │   │   ├── QueryParameterValueResolver.php
│   │   │   │   │   ├── RequestAttributeValueResolver.php
│   │   │   │   │   ├── RequestPayloadValueResolver.php
│   │   │   │   │   ├── RequestValueResolver.php
│   │   │   │   │   ├── ServiceValueResolver.php
│   │   │   │   │   ├── SessionValueResolver.php
│   │   │   │   │   ├── TraceableValueResolver.php
│   │   │   │   │   ├── UidValueResolver.php
│   │   │   │   │   └── VariadicValueResolver.php
│   │   │   │   ├── ArgumentResolverInterface.php
│   │   │   │   ├── ArgumentResolver.php
│   │   │   │   ├── ArgumentValueResolverInterface.php
│   │   │   │   ├── ContainerControllerResolver.php
│   │   │   │   ├── ControllerReference.php
│   │   │   │   ├── ControllerResolverInterface.php
│   │   │   │   ├── ControllerResolver.php
│   │   │   │   ├── ErrorController.php
│   │   │   │   ├── TraceableArgumentResolver.php
│   │   │   │   ├── TraceableControllerResolver.php
│   │   │   │   └── ValueResolverInterface.php
│   │   │   ├── ControllerMetadata
│   │   │   │   ├── ArgumentMetadataFactoryInterface.php
│   │   │   │   ├── ArgumentMetadataFactory.php
│   │   │   │   └── ArgumentMetadata.php
│   │   │   ├── DataCollector
│   │   │   │   ├── AjaxDataCollector.php
│   │   │   │   ├── ConfigDataCollector.php
│   │   │   │   ├── DataCollectorInterface.php
│   │   │   │   ├── DataCollector.php
│   │   │   │   ├── DumpDataCollector.php
│   │   │   │   ├── EventDataCollector.php
│   │   │   │   ├── ExceptionDataCollector.php
│   │   │   │   ├── LateDataCollectorInterface.php
│   │   │   │   ├── LoggerDataCollector.php
│   │   │   │   ├── MemoryDataCollector.php
│   │   │   │   ├── RequestDataCollector.php
│   │   │   │   ├── RouterDataCollector.php
│   │   │   │   └── TimeDataCollector.php
│   │   │   ├── Debug
│   │   │   │   ├── ErrorHandlerConfigurator.php
│   │   │   │   ├── FileLinkFormatter.php
│   │   │   │   ├── TraceableEventDispatcher.php
│   │   │   │   └── VirtualRequestStack.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddAnnotatedClassesToCachePass.php
│   │   │   │   ├── ConfigurableExtension.php
│   │   │   │   ├── ControllerArgumentValueResolverPass.php
│   │   │   │   ├── Extension.php
│   │   │   │   ├── FragmentRendererPass.php
│   │   │   │   ├── LazyLoadingFragmentHandler.php
│   │   │   │   ├── LoggerPass.php
│   │   │   │   ├── MergeExtensionConfigurationPass.php
│   │   │   │   ├── RegisterControllerArgumentLocatorsPass.php
│   │   │   │   ├── RegisterLocaleAwareServicesPass.php
│   │   │   │   ├── RemoveEmptyControllerArgumentLocatorsPass.php
│   │   │   │   ├── ResettableServicePass.php
│   │   │   │   └── ServicesResetter.php
│   │   │   ├── Event
│   │   │   │   ├── ControllerArgumentsEvent.php
│   │   │   │   ├── ControllerEvent.php
│   │   │   │   ├── ExceptionEvent.php
│   │   │   │   ├── FinishRequestEvent.php
│   │   │   │   ├── KernelEvent.php
│   │   │   │   ├── RequestEvent.php
│   │   │   │   ├── ResponseEvent.php
│   │   │   │   ├── TerminateEvent.php
│   │   │   │   └── ViewEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── AbstractSessionListener.php
│   │   │   │   ├── AddRequestFormatsListener.php
│   │   │   │   ├── CacheAttributeListener.php
│   │   │   │   ├── DebugHandlersListener.php
│   │   │   │   ├── DisallowRobotsIndexingListener.php
│   │   │   │   ├── DumpListener.php
│   │   │   │   ├── ErrorListener.php
│   │   │   │   ├── FragmentListener.php
│   │   │   │   ├── LocaleAwareListener.php
│   │   │   │   ├── LocaleListener.php
│   │   │   │   ├── ProfilerListener.php
│   │   │   │   ├── ResponseListener.php
│   │   │   │   ├── RouterListener.php
│   │   │   │   ├── SessionListener.php
│   │   │   │   ├── StreamedResponseListener.php
│   │   │   │   ├── SurrogateListener.php
│   │   │   │   └── ValidateRequestListener.php
│   │   │   ├── Exception
│   │   │   │   ├── AccessDeniedHttpException.php
│   │   │   │   ├── BadRequestHttpException.php
│   │   │   │   ├── ConflictHttpException.php
│   │   │   │   ├── ControllerDoesNotReturnResponseException.php
│   │   │   │   ├── GoneHttpException.php
│   │   │   │   ├── HttpExceptionInterface.php
│   │   │   │   ├── HttpException.php
│   │   │   │   ├── InvalidMetadataException.php
│   │   │   │   ├── LengthRequiredHttpException.php
│   │   │   │   ├── LockedHttpException.php
│   │   │   │   ├── MethodNotAllowedHttpException.php
│   │   │   │   ├── NotAcceptableHttpException.php
│   │   │   │   ├── NotFoundHttpException.php
│   │   │   │   ├── PreconditionFailedHttpException.php
│   │   │   │   ├── PreconditionRequiredHttpException.php
│   │   │   │   ├── ResolverNotFoundException.php
│   │   │   │   ├── ServiceUnavailableHttpException.php
│   │   │   │   ├── TooManyRequestsHttpException.php
│   │   │   │   ├── UnauthorizedHttpException.php
│   │   │   │   ├── UnexpectedSessionUsageException.php
│   │   │   │   ├── UnprocessableEntityHttpException.php
│   │   │   │   └── UnsupportedMediaTypeHttpException.php
│   │   │   ├── Fragment
│   │   │   │   ├── AbstractSurrogateFragmentRenderer.php
│   │   │   │   ├── EsiFragmentRenderer.php
│   │   │   │   ├── FragmentHandler.php
│   │   │   │   ├── FragmentRendererInterface.php
│   │   │   │   ├── FragmentUriGeneratorInterface.php
│   │   │   │   ├── FragmentUriGenerator.php
│   │   │   │   ├── HIncludeFragmentRenderer.php
│   │   │   │   ├── InlineFragmentRenderer.php
│   │   │   │   ├── RoutableFragmentRenderer.php
│   │   │   │   └── SsiFragmentRenderer.php
│   │   │   ├── HttpCache
│   │   │   │   ├── AbstractSurrogate.php
│   │   │   │   ├── Esi.php
│   │   │   │   ├── HttpCache.php
│   │   │   │   ├── ResponseCacheStrategyInterface.php
│   │   │   │   ├── ResponseCacheStrategy.php
│   │   │   │   ├── Ssi.php
│   │   │   │   ├── StoreInterface.php
│   │   │   │   ├── Store.php
│   │   │   │   ├── SubRequestHandler.php
│   │   │   │   └── SurrogateInterface.php
│   │   │   ├── HttpClientKernel.php
│   │   │   ├── HttpKernelBrowser.php
│   │   │   ├── HttpKernelInterface.php
│   │   │   ├── HttpKernel.php
│   │   │   ├── KernelEvents.php
│   │   │   ├── KernelInterface.php
│   │   │   ├── Kernel.php
│   │   │   ├── LICENSE
│   │   │   ├── Log
│   │   │   │   ├── DebugLoggerConfigurator.php
│   │   │   │   ├── DebugLoggerInterface.php
│   │   │   │   └── Logger.php
│   │   │   ├── Profiler
│   │   │   │   ├── FileProfilerStorage.php
│   │   │   │   ├── Profile.php
│   │   │   │   ├── Profiler.php
│   │   │   │   └── ProfilerStorageInterface.php
│   │   │   ├── README.md
│   │   │   ├── RebootableInterface.php
│   │   │   ├── Resources
│   │   │   │   └── welcome.html.php
│   │   │   ├── TerminableInterface.php
│   │   │   └── UriSigner.php
│   │   ├── mailer
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Command
│   │   │   │   └── MailerTestCommand.php
│   │   │   ├── composer.json
│   │   │   ├── DataCollector
│   │   │   │   └── MessageDataCollector.php
│   │   │   ├── DelayedEnvelope.php
│   │   │   ├── Envelope.php
│   │   │   ├── Event
│   │   │   │   ├── FailedMessageEvent.php
│   │   │   │   ├── MessageEvent.php
│   │   │   │   ├── MessageEvents.php
│   │   │   │   └── SentMessageEvent.php
│   │   │   ├── EventListener
│   │   │   │   ├── EnvelopeListener.php
│   │   │   │   ├── MessageListener.php
│   │   │   │   ├── MessageLoggerListener.php
│   │   │   │   └── MessengerTransportListener.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── HttpTransportException.php
│   │   │   │   ├── IncompleteDsnException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   ├── TransportExceptionInterface.php
│   │   │   │   ├── TransportException.php
│   │   │   │   ├── UnexpectedResponseException.php
│   │   │   │   └── UnsupportedSchemeException.php
│   │   │   ├── Header
│   │   │   │   ├── MetadataHeader.php
│   │   │   │   └── TagHeader.php
│   │   │   ├── LICENSE
│   │   │   ├── MailerInterface.php
│   │   │   ├── Mailer.php
│   │   │   ├── Messenger
│   │   │   │   ├── MessageHandler.php
│   │   │   │   └── SendEmailMessage.php
│   │   │   ├── README.md
│   │   │   ├── SentMessage.php
│   │   │   ├── Test
│   │   │   │   ├── Constraint
│   │   │   │   │   ├── EmailCount.php
│   │   │   │   │   └── EmailIsQueued.php
│   │   │   │   └── TransportFactoryTestCase.php
│   │   │   ├── Transport
│   │   │   │   ├── AbstractApiTransport.php
│   │   │   │   ├── AbstractHttpTransport.php
│   │   │   │   ├── AbstractTransportFactory.php
│   │   │   │   ├── AbstractTransport.php
│   │   │   │   ├── Dsn.php
│   │   │   │   ├── FailoverTransport.php
│   │   │   │   ├── NativeTransportFactory.php
│   │   │   │   ├── NullTransportFactory.php
│   │   │   │   ├── NullTransport.php
│   │   │   │   ├── RoundRobinTransport.php
│   │   │   │   ├── SendmailTransportFactory.php
│   │   │   │   ├── SendmailTransport.php
│   │   │   │   ├── Smtp
│   │   │   │   │   ├── Auth
│   │   │   │   │   │   ├── AuthenticatorInterface.php
│   │   │   │   │   │   ├── CramMd5Authenticator.php
│   │   │   │   │   │   ├── LoginAuthenticator.php
│   │   │   │   │   │   ├── PlainAuthenticator.php
│   │   │   │   │   │   └── XOAuth2Authenticator.php
│   │   │   │   │   ├── EsmtpTransportFactory.php
│   │   │   │   │   ├── EsmtpTransport.php
│   │   │   │   │   ├── SmtpTransport.php
│   │   │   │   │   └── Stream
│   │   │   │   │       ├── AbstractStream.php
│   │   │   │   │       ├── ProcessStream.php
│   │   │   │   │       └── SocketStream.php
│   │   │   │   ├── TransportFactoryInterface.php
│   │   │   │   ├── TransportInterface.php
│   │   │   │   └── Transports.php
│   │   │   └── Transport.php
│   │   ├── mime
│   │   │   ├── Address.php
│   │   │   ├── BodyRendererInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CharacterStream.php
│   │   │   ├── composer.json
│   │   │   ├── Crypto
│   │   │   │   ├── DkimOptions.php
│   │   │   │   ├── DkimSigner.php
│   │   │   │   ├── SMimeEncrypter.php
│   │   │   │   ├── SMime.php
│   │   │   │   └── SMimeSigner.php
│   │   │   ├── DependencyInjection
│   │   │   │   └── AddMimeTypeGuesserPass.php
│   │   │   ├── DraftEmail.php
│   │   │   ├── Email.php
│   │   │   ├── Encoder
│   │   │   │   ├── AddressEncoderInterface.php
│   │   │   │   ├── Base64ContentEncoder.php
│   │   │   │   ├── Base64Encoder.php
│   │   │   │   ├── Base64MimeHeaderEncoder.php
│   │   │   │   ├── ContentEncoderInterface.php
│   │   │   │   ├── EightBitContentEncoder.php
│   │   │   │   ├── EncoderInterface.php
│   │   │   │   ├── IdnAddressEncoder.php
│   │   │   │   ├── MimeHeaderEncoderInterface.php
│   │   │   │   ├── QpContentEncoder.php
│   │   │   │   ├── QpEncoder.php
│   │   │   │   ├── QpMimeHeaderEncoder.php
│   │   │   │   └── Rfc2231Encoder.php
│   │   │   ├── Exception
│   │   │   │   ├── AddressEncoderException.php
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── RfcComplianceException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── FileBinaryMimeTypeGuesser.php
│   │   │   ├── FileinfoMimeTypeGuesser.php
│   │   │   ├── Header
│   │   │   │   ├── AbstractHeader.php
│   │   │   │   ├── DateHeader.php
│   │   │   │   ├── HeaderInterface.php
│   │   │   │   ├── Headers.php
│   │   │   │   ├── IdentificationHeader.php
│   │   │   │   ├── MailboxHeader.php
│   │   │   │   ├── MailboxListHeader.php
│   │   │   │   ├── ParameterizedHeader.php
│   │   │   │   ├── PathHeader.php
│   │   │   │   └── UnstructuredHeader.php
│   │   │   ├── HtmlToTextConverter
│   │   │   │   ├── DefaultHtmlToTextConverter.php
│   │   │   │   ├── HtmlToTextConverterInterface.php
│   │   │   │   └── LeagueHtmlToMarkdownConverter.php
│   │   │   ├── LICENSE
│   │   │   ├── MessageConverter.php
│   │   │   ├── Message.php
│   │   │   ├── MimeTypeGuesserInterface.php
│   │   │   ├── MimeTypesInterface.php
│   │   │   ├── MimeTypes.php
│   │   │   ├── Part
│   │   │   │   ├── AbstractMultipartPart.php
│   │   │   │   ├── AbstractPart.php
│   │   │   │   ├── DataPart.php
│   │   │   │   ├── File.php
│   │   │   │   ├── MessagePart.php
│   │   │   │   ├── Multipart
│   │   │   │   │   ├── AlternativePart.php
│   │   │   │   │   ├── DigestPart.php
│   │   │   │   │   ├── FormDataPart.php
│   │   │   │   │   ├── MixedPart.php
│   │   │   │   │   └── RelatedPart.php
│   │   │   │   ├── SMimePart.php
│   │   │   │   └── TextPart.php
│   │   │   ├── RawMessage.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   └── bin
│   │   │   │       └── update_mime_types.php
│   │   │   └── Test
│   │   │       └── Constraint
│   │   │           ├── EmailAddressContains.php
│   │   │           ├── EmailAttachmentCount.php
│   │   │           ├── EmailHasHeader.php
│   │   │           ├── EmailHeaderSame.php
│   │   │           ├── EmailHtmlBodyContains.php
│   │   │           ├── EmailSubjectContains.php
│   │   │           └── EmailTextBodyContains.php
│   │   ├── polyfill-ctype
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── Ctype.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-grapheme
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── Grapheme.php
│   │   │   ├── LICENSE
│   │   │   └── README.md
│   │   ├── polyfill-intl-idn
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── Idn.php
│   │   │   ├── Info.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       └── unidata
│   │   │           ├── deviation.php
│   │   │           ├── disallowed.php
│   │   │           ├── DisallowedRanges.php
│   │   │           ├── disallowed_STD3_mapped.php
│   │   │           ├── disallowed_STD3_valid.php
│   │   │           ├── ignored.php
│   │   │           ├── mapped.php
│   │   │           ├── Regex.php
│   │   │           └── virama.php
│   │   ├── polyfill-intl-normalizer
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Normalizer.php
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       ├── stubs
│   │   │       │   └── Normalizer.php
│   │   │       └── unidata
│   │   │           ├── canonicalComposition.php
│   │   │           ├── canonicalDecomposition.php
│   │   │           ├── combiningClass.php
│   │   │           └── compatibilityDecomposition.php
│   │   ├── polyfill-mbstring
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Mbstring.php
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       └── unidata
│   │   │           ├── caseFolding.php
│   │   │           ├── lowerCase.php
│   │   │           ├── titleCaseRegexp.php
│   │   │           └── upperCase.php
│   │   ├── polyfill-php80
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php80.php
│   │   │   ├── PhpToken.php
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       └── stubs
│   │   │           ├── Attribute.php
│   │   │           ├── PhpToken.php
│   │   │           ├── Stringable.php
│   │   │           ├── UnhandledMatchError.php
│   │   │           └── ValueError.php
│   │   ├── polyfill-php83
│   │   │   ├── bootstrap81.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── Php83.php
│   │   │   ├── README.md
│   │   │   └── Resources
│   │   │       └── stubs
│   │   │           ├── DateError.php
│   │   │           ├── DateException.php
│   │   │           ├── DateInvalidOperationException.php
│   │   │           ├── DateInvalidTimeZoneException.php
│   │   │           ├── DateMalformedIntervalStringException.php
│   │   │           ├── DateMalformedPeriodStringException.php
│   │   │           ├── DateMalformedStringException.php
│   │   │           ├── DateObjectError.php
│   │   │           ├── DateRangeError.php
│   │   │           ├── Override.php
│   │   │           └── SQLite3Exception.php
│   │   ├── polyfill-uuid
│   │   │   ├── bootstrap80.php
│   │   │   ├── bootstrap.php
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   └── Uuid.php
│   │   ├── process
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── ProcessFailedException.php
│   │   │   │   ├── ProcessSignaledException.php
│   │   │   │   ├── ProcessTimedOutException.php
│   │   │   │   ├── RunProcessFailedException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── ExecutableFinder.php
│   │   │   ├── InputStream.php
│   │   │   ├── LICENSE
│   │   │   ├── Messenger
│   │   │   │   ├── RunProcessContext.php
│   │   │   │   ├── RunProcessMessageHandler.php
│   │   │   │   └── RunProcessMessage.php
│   │   │   ├── PhpExecutableFinder.php
│   │   │   ├── PhpProcess.php
│   │   │   ├── PhpSubprocess.php
│   │   │   ├── Pipes
│   │   │   │   ├── AbstractPipes.php
│   │   │   │   ├── PipesInterface.php
│   │   │   │   ├── UnixPipes.php
│   │   │   │   └── WindowsPipes.php
│   │   │   ├── Process.php
│   │   │   ├── ProcessUtils.php
│   │   │   └── README.md
│   │   ├── routing
│   │   │   ├── Alias.php
│   │   │   ├── Annotation
│   │   │   │   └── Route.php
│   │   │   ├── Attribute
│   │   │   │   └── Route.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CompiledRoute.php
│   │   │   ├── composer.json
│   │   │   ├── DependencyInjection
│   │   │   │   ├── AddExpressionLanguageProvidersPass.php
│   │   │   │   └── RoutingResolverPass.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidParameterException.php
│   │   │   │   ├── MethodNotAllowedException.php
│   │   │   │   ├── MissingMandatoryParametersException.php
│   │   │   │   ├── NoConfigurationException.php
│   │   │   │   ├── ResourceNotFoundException.php
│   │   │   │   ├── RouteCircularReferenceException.php
│   │   │   │   ├── RouteNotFoundException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Generator
│   │   │   │   ├── CompiledUrlGenerator.php
│   │   │   │   ├── ConfigurableRequirementsInterface.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlGeneratorDumper.php
│   │   │   │   │   ├── GeneratorDumperInterface.php
│   │   │   │   │   └── GeneratorDumper.php
│   │   │   │   ├── UrlGeneratorInterface.php
│   │   │   │   └── UrlGenerator.php
│   │   │   ├── LICENSE
│   │   │   ├── Loader
│   │   │   │   ├── AnnotationClassLoader.php
│   │   │   │   ├── AnnotationDirectoryLoader.php
│   │   │   │   ├── AnnotationFileLoader.php
│   │   │   │   ├── AttributeClassLoader.php
│   │   │   │   ├── AttributeDirectoryLoader.php
│   │   │   │   ├── AttributeFileLoader.php
│   │   │   │   ├── ClosureLoader.php
│   │   │   │   ├── Configurator
│   │   │   │   │   ├── AliasConfigurator.php
│   │   │   │   │   ├── CollectionConfigurator.php
│   │   │   │   │   ├── ImportConfigurator.php
│   │   │   │   │   ├── RouteConfigurator.php
│   │   │   │   │   ├── RoutingConfigurator.php
│   │   │   │   │   └── Traits
│   │   │   │   │       ├── AddTrait.php
│   │   │   │   │       ├── HostTrait.php
│   │   │   │   │       ├── LocalizedRouteTrait.php
│   │   │   │   │       ├── PrefixTrait.php
│   │   │   │   │       └── RouteTrait.php
│   │   │   │   ├── ContainerLoader.php
│   │   │   │   ├── DirectoryLoader.php
│   │   │   │   ├── GlobFileLoader.php
│   │   │   │   ├── ObjectLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── Psr4DirectoryLoader.php
│   │   │   │   ├── schema
│   │   │   │   │   └── routing
│   │   │   │   │       └── routing-1.0.xsd
│   │   │   │   ├── XmlFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── Matcher
│   │   │   │   ├── CompiledUrlMatcher.php
│   │   │   │   ├── Dumper
│   │   │   │   │   ├── CompiledUrlMatcherDumper.php
│   │   │   │   │   ├── CompiledUrlMatcherTrait.php
│   │   │   │   │   ├── MatcherDumperInterface.php
│   │   │   │   │   ├── MatcherDumper.php
│   │   │   │   │   └── StaticPrefixCollection.php
│   │   │   │   ├── ExpressionLanguageProvider.php
│   │   │   │   ├── RedirectableUrlMatcherInterface.php
│   │   │   │   ├── RedirectableUrlMatcher.php
│   │   │   │   ├── RequestMatcherInterface.php
│   │   │   │   ├── TraceableUrlMatcher.php
│   │   │   │   ├── UrlMatcherInterface.php
│   │   │   │   └── UrlMatcher.php
│   │   │   ├── README.md
│   │   │   ├── RequestContextAwareInterface.php
│   │   │   ├── RequestContext.php
│   │   │   ├── Requirement
│   │   │   │   ├── EnumRequirement.php
│   │   │   │   └── Requirement.php
│   │   │   ├── RouteCollection.php
│   │   │   ├── RouteCompilerInterface.php
│   │   │   ├── RouteCompiler.php
│   │   │   ├── Route.php
│   │   │   ├── RouterInterface.php
│   │   │   └── Router.php
│   │   ├── service-contracts
│   │   │   ├── Attribute
│   │   │   │   ├── Required.php
│   │   │   │   └── SubscribedService.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── ResetInterface.php
│   │   │   ├── ServiceCollectionInterface.php
│   │   │   ├── ServiceLocatorTrait.php
│   │   │   ├── ServiceMethodsSubscriberTrait.php
│   │   │   ├── ServiceProviderInterface.php
│   │   │   ├── ServiceSubscriberInterface.php
│   │   │   ├── ServiceSubscriberTrait.php
│   │   │   └── Test
│   │   │       ├── ServiceLocatorTestCase.php
│   │   │       └── ServiceLocatorTest.php
│   │   ├── string
│   │   │   ├── AbstractString.php
│   │   │   ├── AbstractUnicodeString.php
│   │   │   ├── ByteString.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── CodePointString.php
│   │   │   ├── composer.json
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   └── RuntimeException.php
│   │   │   ├── Inflector
│   │   │   │   ├── EnglishInflector.php
│   │   │   │   ├── FrenchInflector.php
│   │   │   │   └── InflectorInterface.php
│   │   │   ├── LazyString.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   ├── data
│   │   │   │   │   ├── wcswidth_table_wide.php
│   │   │   │   │   └── wcswidth_table_zero.php
│   │   │   │   └── functions.php
│   │   │   ├── Slugger
│   │   │   │   ├── AsciiSlugger.php
│   │   │   │   └── SluggerInterface.php
│   │   │   └── UnicodeString.php
│   │   ├── translation
│   │   │   ├── Catalogue
│   │   │   │   ├── AbstractOperation.php
│   │   │   │   ├── MergeOperation.php
│   │   │   │   ├── OperationInterface.php
│   │   │   │   └── TargetOperation.php
│   │   │   ├── CatalogueMetadataAwareInterface.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Command
│   │   │   │   ├── TranslationPullCommand.php
│   │   │   │   ├── TranslationPushCommand.php
│   │   │   │   ├── TranslationTrait.php
│   │   │   │   └── XliffLintCommand.php
│   │   │   ├── composer.json
│   │   │   ├── DataCollector
│   │   │   │   └── TranslationDataCollector.php
│   │   │   ├── DataCollectorTranslator.php
│   │   │   ├── DependencyInjection
│   │   │   │   ├── DataCollectorTranslatorPass.php
│   │   │   │   ├── LoggingTranslatorPass.php
│   │   │   │   ├── TranslationDumperPass.php
│   │   │   │   ├── TranslationExtractorPass.php
│   │   │   │   ├── TranslatorPass.php
│   │   │   │   └── TranslatorPathsPass.php
│   │   │   ├── Dumper
│   │   │   │   ├── CsvFileDumper.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── FileDumper.php
│   │   │   │   ├── IcuResFileDumper.php
│   │   │   │   ├── IniFileDumper.php
│   │   │   │   ├── JsonFileDumper.php
│   │   │   │   ├── MoFileDumper.php
│   │   │   │   ├── PhpFileDumper.php
│   │   │   │   ├── PoFileDumper.php
│   │   │   │   ├── QtFileDumper.php
│   │   │   │   ├── XliffFileDumper.php
│   │   │   │   └── YamlFileDumper.php
│   │   │   ├── Exception
│   │   │   │   ├── ExceptionInterface.php
│   │   │   │   ├── IncompleteDsnException.php
│   │   │   │   ├── InvalidArgumentException.php
│   │   │   │   ├── InvalidResourceException.php
│   │   │   │   ├── LogicException.php
│   │   │   │   ├── MissingRequiredOptionException.php
│   │   │   │   ├── NotFoundResourceException.php
│   │   │   │   ├── ProviderExceptionInterface.php
│   │   │   │   ├── ProviderException.php
│   │   │   │   ├── RuntimeException.php
│   │   │   │   └── UnsupportedSchemeException.php
│   │   │   ├── Extractor
│   │   │   │   ├── AbstractFileExtractor.php
│   │   │   │   ├── ChainExtractor.php
│   │   │   │   ├── ExtractorInterface.php
│   │   │   │   ├── PhpAstExtractor.php
│   │   │   │   ├── PhpExtractor.php
│   │   │   │   ├── PhpStringTokenParser.php
│   │   │   │   └── Visitor
│   │   │   │       ├── AbstractVisitor.php
│   │   │   │       ├── ConstraintVisitor.php
│   │   │   │       ├── TranslatableMessageVisitor.php
│   │   │   │       └── TransMethodVisitor.php
│   │   │   ├── Formatter
│   │   │   │   ├── IntlFormatterInterface.php
│   │   │   │   ├── IntlFormatter.php
│   │   │   │   ├── MessageFormatterInterface.php
│   │   │   │   └── MessageFormatter.php
│   │   │   ├── IdentityTranslator.php
│   │   │   ├── LICENSE
│   │   │   ├── Loader
│   │   │   │   ├── ArrayLoader.php
│   │   │   │   ├── CsvFileLoader.php
│   │   │   │   ├── FileLoader.php
│   │   │   │   ├── IcuDatFileLoader.php
│   │   │   │   ├── IcuResFileLoader.php
│   │   │   │   ├── IniFileLoader.php
│   │   │   │   ├── JsonFileLoader.php
│   │   │   │   ├── LoaderInterface.php
│   │   │   │   ├── MoFileLoader.php
│   │   │   │   ├── PhpFileLoader.php
│   │   │   │   ├── PoFileLoader.php
│   │   │   │   ├── QtFileLoader.php
│   │   │   │   ├── XliffFileLoader.php
│   │   │   │   └── YamlFileLoader.php
│   │   │   ├── LocaleSwitcher.php
│   │   │   ├── LoggingTranslator.php
│   │   │   ├── MessageCatalogueInterface.php
│   │   │   ├── MessageCatalogue.php
│   │   │   ├── MetadataAwareInterface.php
│   │   │   ├── Provider
│   │   │   │   ├── AbstractProviderFactory.php
│   │   │   │   ├── Dsn.php
│   │   │   │   ├── FilteringProvider.php
│   │   │   │   ├── NullProviderFactory.php
│   │   │   │   ├── NullProvider.php
│   │   │   │   ├── ProviderFactoryInterface.php
│   │   │   │   ├── ProviderInterface.php
│   │   │   │   ├── TranslationProviderCollectionFactory.php
│   │   │   │   └── TranslationProviderCollection.php
│   │   │   ├── PseudoLocalizationTranslator.php
│   │   │   ├── Reader
│   │   │   │   ├── TranslationReaderInterface.php
│   │   │   │   └── TranslationReader.php
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── translation-status.php
│   │   │   │   ├── data
│   │   │   │   │   └── parents.json
│   │   │   │   ├── functions.php
│   │   │   │   └── schemas
│   │   │   │       ├── xliff-core-1.2-transitional.xsd
│   │   │   │       ├── xliff-core-2.0.xsd
│   │   │   │       └── xml.xsd
│   │   │   ├── Test
│   │   │   │   ├── ProviderFactoryTestCase.php
│   │   │   │   └── ProviderTestCase.php
│   │   │   ├── TranslatableMessage.php
│   │   │   ├── TranslatorBagInterface.php
│   │   │   ├── TranslatorBag.php
│   │   │   ├── Translator.php
│   │   │   ├── Util
│   │   │   │   ├── ArrayConverter.php
│   │   │   │   └── XliffUtils.php
│   │   │   └── Writer
│   │   │       ├── TranslationWriterInterface.php
│   │   │       └── TranslationWriter.php
│   │   ├── translation-contracts
│   │   │   ├── CHANGELOG.md
│   │   │   ├── composer.json
│   │   │   ├── LICENSE
│   │   │   ├── LocaleAwareInterface.php
│   │   │   ├── README.md
│   │   │   ├── Test
│   │   │   │   └── TranslatorTest.php
│   │   │   ├── TranslatableInterface.php
│   │   │   ├── TranslatorInterface.php
│   │   │   └── TranslatorTrait.php
│   │   ├── uid
│   │   │   ├── AbstractUid.php
│   │   │   ├── BinaryUtil.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Command
│   │   │   │   ├── GenerateUlidCommand.php
│   │   │   │   ├── GenerateUuidCommand.php
│   │   │   │   ├── InspectUlidCommand.php
│   │   │   │   └── InspectUuidCommand.php
│   │   │   ├── composer.json
│   │   │   ├── Factory
│   │   │   │   ├── NameBasedUuidFactory.php
│   │   │   │   ├── RandomBasedUuidFactory.php
│   │   │   │   ├── TimeBasedUuidFactory.php
│   │   │   │   ├── UlidFactory.php
│   │   │   │   └── UuidFactory.php
│   │   │   ├── LICENSE
│   │   │   ├── MaxUlid.php
│   │   │   ├── MaxUuid.php
│   │   │   ├── NilUlid.php
│   │   │   ├── NilUuid.php
│   │   │   ├── README.md
│   │   │   ├── TimeBasedUidInterface.php
│   │   │   ├── Ulid.php
│   │   │   ├── Uuid.php
│   │   │   ├── UuidV1.php
│   │   │   ├── UuidV3.php
│   │   │   ├── UuidV4.php
│   │   │   ├── UuidV5.php
│   │   │   ├── UuidV6.php
│   │   │   ├── UuidV7.php
│   │   │   └── UuidV8.php
│   │   ├── var-dumper
│   │   │   ├── Caster
│   │   │   │   ├── AmqpCaster.php
│   │   │   │   ├── ArgsStub.php
│   │   │   │   ├── Caster.php
│   │   │   │   ├── ClassStub.php
│   │   │   │   ├── ConstStub.php
│   │   │   │   ├── CutArrayStub.php
│   │   │   │   ├── CutStub.php
│   │   │   │   ├── DateCaster.php
│   │   │   │   ├── DoctrineCaster.php
│   │   │   │   ├── DOMCaster.php
│   │   │   │   ├── DsCaster.php
│   │   │   │   ├── DsPairStub.php
│   │   │   │   ├── EnumStub.php
│   │   │   │   ├── ExceptionCaster.php
│   │   │   │   ├── FFICaster.php
│   │   │   │   ├── FiberCaster.php
│   │   │   │   ├── FrameStub.php
│   │   │   │   ├── GmpCaster.php
│   │   │   │   ├── ImagineCaster.php
│   │   │   │   ├── ImgStub.php
│   │   │   │   ├── IntlCaster.php
│   │   │   │   ├── LinkStub.php
│   │   │   │   ├── MemcachedCaster.php
│   │   │   │   ├── MysqliCaster.php
│   │   │   │   ├── PdoCaster.php
│   │   │   │   ├── PgSqlCaster.php
│   │   │   │   ├── ProxyManagerCaster.php
│   │   │   │   ├── RdKafkaCaster.php
│   │   │   │   ├── RedisCaster.php
│   │   │   │   ├── ReflectionCaster.php
│   │   │   │   ├── ResourceCaster.php
│   │   │   │   ├── ScalarStub.php
│   │   │   │   ├── SplCaster.php
│   │   │   │   ├── StubCaster.php
│   │   │   │   ├── SymfonyCaster.php
│   │   │   │   ├── TraceStub.php
│   │   │   │   ├── UninitializedStub.php
│   │   │   │   ├── UuidCaster.php
│   │   │   │   ├── XmlReaderCaster.php
│   │   │   │   └── XmlResourceCaster.php
│   │   │   ├── CHANGELOG.md
│   │   │   ├── Cloner
│   │   │   │   ├── AbstractCloner.php
│   │   │   │   ├── ClonerInterface.php
│   │   │   │   ├── Cursor.php
│   │   │   │   ├── Data.php
│   │   │   │   ├── DumperInterface.php
│   │   │   │   ├── Internal
│   │   │   │   │   └── NoDefault.php
│   │   │   │   ├── Stub.php
│   │   │   │   └── VarCloner.php
│   │   │   ├── Command
│   │   │   │   ├── Descriptor
│   │   │   │   │   ├── CliDescriptor.php
│   │   │   │   │   ├── DumpDescriptorInterface.php
│   │   │   │   │   └── HtmlDescriptor.php
│   │   │   │   └── ServerDumpCommand.php
│   │   │   ├── composer.json
│   │   │   ├── Dumper
│   │   │   │   ├── AbstractDumper.php
│   │   │   │   ├── CliDumper.php
│   │   │   │   ├── ContextProvider
│   │   │   │   │   ├── CliContextProvider.php
│   │   │   │   │   ├── ContextProviderInterface.php
│   │   │   │   │   ├── RequestContextProvider.php
│   │   │   │   │   └── SourceContextProvider.php
│   │   │   │   ├── ContextualizedDumper.php
│   │   │   │   ├── DataDumperInterface.php
│   │   │   │   ├── HtmlDumper.php
│   │   │   │   └── ServerDumper.php
│   │   │   ├── Exception
│   │   │   │   └── ThrowingCasterException.php
│   │   │   ├── LICENSE
│   │   │   ├── README.md
│   │   │   ├── Resources
│   │   │   │   ├── bin
│   │   │   │   │   └── var-dump-server
│   │   │   │   ├── css
│   │   │   │   │   └── htmlDescriptor.css
│   │   │   │   ├── functions
│   │   │   │   │   └── dump.php
│   │   │   │   └── js
│   │   │   │       └── htmlDescriptor.js
│   │   │   ├── Server
│   │   │   │   ├── Connection.php
│   │   │   │   └── DumpServer.php
│   │   │   ├── Test
│   │   │   │   └── VarDumperTestTrait.php
│   │   │   └── VarDumper.php
│   │   └── yaml
│   │       ├── CHANGELOG.md
│   │       ├── Command
│   │       │   └── LintCommand.php
│   │       ├── composer.json
│   │       ├── Dumper.php
│   │       ├── Escaper.php
│   │       ├── Exception
│   │       │   ├── DumpException.php
│   │       │   ├── ExceptionInterface.php
│   │       │   ├── ParseException.php
│   │       │   └── RuntimeException.php
│   │       ├── Inline.php
│   │       ├── LICENSE
│   │       ├── Parser.php
│   │       ├── README.md
│   │       ├── Resources
│   │       │   └── bin
│   │       │       └── yaml-lint
│   │       ├── Tag
│   │       │   └── TaggedValue.php
│   │       ├── Unescaper.php
│   │       └── Yaml.php
│   ├── theseer
│   │   └── tokenizer
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── composer.lock
│   │       ├── LICENSE
│   │       ├── README.md
│   │       └── src
│   │           ├── Exception.php
│   │           ├── NamespaceUriException.php
│   │           ├── NamespaceUri.php
│   │           ├── TokenCollectionException.php
│   │           ├── TokenCollection.php
│   │           ├── Tokenizer.php
│   │           ├── Token.php
│   │           └── XMLSerializer.php
│   ├── tijsverkoyen
│   │   └── css-to-inline-styles
│   │       ├── composer.json
│   │       ├── LICENSE.md
│   │       └── src
│   │           ├── Css
│   │           │   ├── Processor.php
│   │           │   ├── Property
│   │           │   │   ├── Processor.php
│   │           │   │   └── Property.php
│   │           │   └── Rule
│   │           │       ├── Processor.php
│   │           │       └── Rule.php
│   │           └── CssToInlineStyles.php
│   ├── vlucas
│   │   └── phpdotenv
│   │       ├── composer.json
│   │       ├── LICENSE
│   │       └── src
│   │           ├── Dotenv.php
│   │           ├── Exception
│   │           │   ├── ExceptionInterface.php
│   │           │   ├── InvalidEncodingException.php
│   │           │   ├── InvalidFileException.php
│   │           │   ├── InvalidPathException.php
│   │           │   └── ValidationException.php
│   │           ├── Loader
│   │           │   ├── LoaderInterface.php
│   │           │   ├── Loader.php
│   │           │   └── Resolver.php
│   │           ├── Parser
│   │           │   ├── EntryParser.php
│   │           │   ├── Entry.php
│   │           │   ├── Lexer.php
│   │           │   ├── Lines.php
│   │           │   ├── ParserInterface.php
│   │           │   ├── Parser.php
│   │           │   └── Value.php
│   │           ├── Repository
│   │           │   ├── Adapter
│   │           │   │   ├── AdapterInterface.php
│   │           │   │   ├── ApacheAdapter.php
│   │           │   │   ├── ArrayAdapter.php
│   │           │   │   ├── EnvConstAdapter.php
│   │           │   │   ├── GuardedWriter.php
│   │           │   │   ├── ImmutableWriter.php
│   │           │   │   ├── MultiReader.php
│   │           │   │   ├── MultiWriter.php
│   │           │   │   ├── PutenvAdapter.php
│   │           │   │   ├── ReaderInterface.php
│   │           │   │   ├── ReplacingWriter.php
│   │           │   │   ├── ServerConstAdapter.php
│   │           │   │   └── WriterInterface.php
│   │           │   ├── AdapterRepository.php
│   │           │   ├── RepositoryBuilder.php
│   │           │   └── RepositoryInterface.php
│   │           ├── Store
│   │           │   ├── File
│   │           │   │   ├── Paths.php
│   │           │   │   └── Reader.php
│   │           │   ├── FileStore.php
│   │           │   ├── StoreBuilder.php
│   │           │   ├── StoreInterface.php
│   │           │   └── StringStore.php
│   │           ├── Util
│   │           │   ├── Regex.php
│   │           │   └── Str.php
│   │           └── Validator.php
│   ├── voku
│   │   └── portable-ascii
│   │       ├── CHANGELOG.md
│   │       ├── composer.json
│   │       ├── LICENSE.txt
│   │       ├── README.md
│   │       └── src
│   │           └── voku
│   │               └── helper
│   │                   ├── ASCII.php
│   │                   └── data
│   │                       ├── ascii_by_languages.php
│   │                       ├── ascii_extras_by_languages.php
│   │                       ├── ascii_language_max_key.php
│   │                       ├── ascii_ord.php
│   │                       ├── x000.php
│   │                       ├── x001.php
│   │                       ├── x002.php
│   │                       ├── x003.php
│   │                       ├── x004.php
│   │                       ├── x005.php
│   │                       ├── x006.php
│   │                       ├── x007.php
│   │                       ├── x009.php
│   │                       ├── x00a.php
│   │                       ├── x00b.php
│   │                       ├── x00c.php
│   │                       ├── x00d.php
│   │                       ├── x00e.php
│   │                       ├── x00f.php
│   │                       ├── x010.php
│   │                       ├── x011.php
│   │                       ├── x012.php
│   │                       ├── x013.php
│   │                       ├── x014.php
│   │                       ├── x015.php
│   │                       ├── x016.php
│   │                       ├── x017.php
│   │                       ├── x018.php
│   │                       ├── x01d.php
│   │                       ├── x01e.php
│   │                       ├── x01f.php
│   │                       ├── x020.php
│   │                       ├── x021.php
│   │                       ├── x022.php
│   │                       ├── x023.php
│   │                       ├── x024.php
│   │                       ├── x025.php
│   │                       ├── x026.php
│   │                       ├── x027.php
│   │                       ├── x028.php
│   │                       ├── x029.php
│   │                       ├── x02a.php
│   │                       ├── x02c.php
│   │                       ├── x02e.php
│   │                       ├── x02f.php
│   │                       ├── x030.php
│   │                       ├── x031.php
│   │                       ├── x032.php
│   │                       ├── x033.php
│   │                       ├── x04d.php
│   │                       ├── x04e.php
│   │                       ├── x04f.php
│   │                       ├── x050.php
│   │                       ├── x051.php
│   │                       ├── x052.php
│   │                       ├── x053.php
│   │                       ├── x054.php
│   │                       ├── x055.php
│   │                       ├── x056.php
│   │                       ├── x057.php
│   │                       ├── x058.php
│   │                       ├── x059.php
│   │                       ├── x05a.php
│   │                       ├── x05b.php
│   │                       ├── x05c.php
│   │                       ├── x05d.php
│   │                       ├── x05e.php
│   │                       ├── x05f.php
│   │                       ├── x060.php
│   │                       ├── x061.php
│   │                       ├── x062.php
│   │                       ├── x063.php
│   │                       ├── x064.php
│   │                       ├── x065.php
│   │                       ├── x066.php
│   │                       ├── x067.php
│   │                       ├── x068.php
│   │                       ├── x069.php
│   │                       ├── x06a.php
│   │                       ├── x06b.php
│   │                       ├── x06c.php
│   │                       ├── x06d.php
│   │                       ├── x06e.php
│   │                       ├── x06f.php
│   │                       ├── x070.php
│   │                       ├── x071.php
│   │                       ├── x072.php
│   │                       ├── x073.php
│   │                       ├── x074.php
│   │                       ├── x075.php
│   │                       ├── x076.php
│   │                       ├── x077.php
│   │                       ├── x078.php
│   │                       ├── x079.php
│   │                       ├── x07a.php
│   │                       ├── x07b.php
│   │                       ├── x07c.php
│   │                       ├── x07d.php
│   │                       ├── x07e.php
│   │                       ├── x07f.php
│   │                       ├── x080.php
│   │                       ├── x081.php
│   │                       ├── x082.php
│   │                       ├── x083.php
│   │                       ├── x084.php
│   │                       ├── x085.php
│   │                       ├── x086.php
│   │                       ├── x087.php
│   │                       ├── x088.php
│   │                       ├── x089.php
│   │                       ├── x08a.php
│   │                       ├── x08b.php
│   │                       ├── x08c.php
│   │                       ├── x08d.php
│   │                       ├── x08e.php
│   │                       ├── x08f.php
│   │                       ├── x090.php
│   │                       ├── x091.php
│   │                       ├── x092.php
│   │                       ├── x093.php
│   │                       ├── x094.php
│   │                       ├── x095.php
│   │                       ├── x096.php
│   │                       ├── x097.php
│   │                       ├── x098.php
│   │                       ├── x099.php
│   │                       ├── x09a.php
│   │                       ├── x09b.php
│   │                       ├── x09c.php
│   │                       ├── x09d.php
│   │                       ├── x09e.php
│   │                       ├── x09f.php
│   │                       ├── x0a0.php
│   │                       ├── x0a1.php
│   │                       ├── x0a2.php
│   │                       ├── x0a3.php
│   │                       ├── x0a4.php
│   │                       ├── x0ac.php
│   │                       ├── x0ad.php
│   │                       ├── x0ae.php
│   │                       ├── x0af.php
│   │                       ├── x0b0.php
│   │                       ├── x0b1.php
│   │                       ├── x0b2.php
│   │                       ├── x0b3.php
│   │                       ├── x0b4.php
│   │                       ├── x0b5.php
│   │                       ├── x0b6.php
│   │                       ├── x0b7.php
│   │                       ├── x0b8.php
│   │                       ├── x0b9.php
│   │                       ├── x0ba.php
│   │                       ├── x0bb.php
│   │                       ├── x0bc.php
│   │                       ├── x0bd.php
│   │                       ├── x0be.php
│   │                       ├── x0bf.php
│   │                       ├── x0c0.php
│   │                       ├── x0c1.php
│   │                       ├── x0c2.php
│   │                       ├── x0c3.php
│   │                       ├── x0c4.php
│   │                       ├── x0c5.php
│   │                       ├── x0c6.php
│   │                       ├── x0c7.php
│   │                       ├── x0c8.php
│   │                       ├── x0c9.php
│   │                       ├── x0ca.php
│   │                       ├── x0cb.php
│   │                       ├── x0cc.php
│   │                       ├── x0cd.php
│   │                       ├── x0ce.php
│   │                       ├── x0cf.php
│   │                       ├── x0d0.php
│   │                       ├── x0d1.php
│   │                       ├── x0d2.php
│   │                       ├── x0d3.php
│   │                       ├── x0d4.php
│   │                       ├── x0d5.php
│   │                       ├── x0d6.php
│   │                       ├── x0d7.php
│   │                       ├── x0f9.php
│   │                       ├── x0fa.php
│   │                       ├── x0fb.php
│   │                       ├── x0fc.php
│   │                       ├── x0fd.php
│   │                       ├── x0fe.php
│   │                       ├── x0ff.php
│   │                       ├── x1d4.php
│   │                       ├── x1d5.php
│   │                       ├── x1d6.php
│   │                       ├── x1d7.php
│   │                       └── x1f1.php
│   └── webmozart
│       └── assert
│           ├── CHANGELOG.md
│           ├── composer.json
│           ├── LICENSE
│           ├── README.md
│           └── src
│               ├── Assert.php
│               ├── InvalidArgumentException.php
│               └── Mixin.php
└── vite.config.js

1728 directories, 13049 files

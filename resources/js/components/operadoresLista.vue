<template>
    <div class="operadores-lista-main-container">
        <h1 class="operadores-lista-title gothica1-normal-black-28px">
            Gestionar usuarios
            <div class="operadores-lista-motor-busqueda">
                <span class="operadores-lista-icon-search-motor-busqueda material-icons-round">
                    <span class="material-icons-round">
                        person_search
                    </span>
                </span>
                <input type="text" class="operadores-lista-motor-busqueda-text" placeholder="Escribe el nombre del usuario...">
            </div>
        </h1>
        <div class="operadores-lista-container">
            <div class="operadores-lista-marco"> <!-- FIXME: Marco -->
                <span class="operadores-lista-row mdc-list-item__ripple">
                    <span class="operadores-lista-foto-perfil-margen mdc-list-item__graphic material-icons">
                    </span>
                    <span class="operadores-lista-nombre mdc-list-item__text">
                        <span class="mdc-list-item__primary-text">Nombre de usuario</span>
                    </span>
                    <span class="operadores-lista-info">
                        <span class="operadores-lista-email mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Correo electrónico</span>
                        </span>
                        <span class="operadores-lista-user mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Codigo</span>
                        </span>
                        <span class="operadores-lista-status mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Estado</span>
                        </span>
                    </span>
                </span>
            </div>
            <ul class="operadores-lista-list-scrolling mdc-list mdc-list--two-line"> <!-- FIXME: Caja scrolling -->
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">000001</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
                <li class="operadores-lista-item mdc-list-item"> <!-- FIXME: Item -->
                    <span class="operadores-lista-row">
                        <span class="operadores-lista-foto-perfil mdc-list-item__graphic material-icons">
                        </span>
                        <span class="operadores-lista-nombre mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">Sergi Pérez Jiménez</span>
                        </span>
                        <span class="operadores-lista-info">
                            <span class="operadores-lista-email mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">sperezj2021@cepnet.net</span>
                            </span>
                            <span class="operadores-lista-user mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Administrador</span>
                            </span>
                            <span class="operadores-lista-status mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">Desconectado</span>
                            </span>
                        </span>
                        <div class="operadores-lista-delete material-icons-outlined">
                            delete
                        </div>
                        <!-- <button class="mdc-icon-button material-icons">
                            more_vert
                        </button> -->
                    </span>
                </li>
            </ul>
        </div>
        <div class="operadores-lista-boton-space mdc-touch-target-wrapper"> <!-- TODO: Add user -->
            <div class="action" @click="actionToggle()">
                <span class="material-icons mdc-fab__icon" data-open="operadores-lista-modalScreen" @click="modalVisible">add</span>
            </div>
        </div>
        <div class="operadores-lista-modal" id="operadores-lista-modalScreen"> <!-- TODO: Modal -->
            <div class="operadores-lista-modal-window">
                <header class="operadores-lista-modal-header">
                    <div class="operadores-lista-modal-crear-usuario-title valign-text-middle gothica1-normal-black-28px"> <!-- FIXME: Editar perfil -->
                            Crear usuario
                    </div>
                    <div class="operadores-lista-x" id="operadores-lista-close-modal" data-close="operadores-lista-modalScreen" @click="modalInvisible">
                        <span class="material-icons" id="operadores-lista-x" @click="actionToggle()">
                            close
                        </span>
                    </div>
                </header>
                <div class="operadores-lista-modal-information gothica1-normal-black-21px">
                    <div class="operadores-lista-modal-crear-usuario">
                        <div class="operadores-lista-modal-crear-usuario-container">
                            <div class="operadores-lista-modal-crear-usuario-datos-personales valign-text-middle gothica1-normal-black-21px"> <!-- FIXME: Datos personales -->
                            Datos personales
                            </div>
                            <div class="operadores-lista-modal-crear-usuario-flex-row">
                                <div class="editar-perfil-operador-correo-electronico"> <!-- FIXME: Correo -->
                                    <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon" id="editar-perfil-text-width">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">
                                            Dirección de correo electrónico
                                        </span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                            account_box
                                        </i>
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="operadores-lista-modal-crear-usuario-flex-row-1">
                                <div class="editar-perfil-operador-nombre"> <!-- FIXME: Nombre -->
                                    <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon" id="editar-perfil-text-width">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">
                                            Nombre
                                        </span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                            account_circle
                                        </i>
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                </div>
                                <div class="editar-perfil-operador-apellidos"> <!-- FIXME: Apellidos -->
                                    <label class="mdc-text-field mdc-text-field--filled mdc-text-field--with-trailing-icon" id="editar-perfil-text-width">
                                        <span class="mdc-text-field__ripple"></span>
                                        <span class="mdc-floating-label" id="my-label-id">
                                            Apellidos
                                        </span>
                                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id"/>
                                        <i class="material-icons mdc-text-field__icon mdc-text-field__icon--trailing" tabindex="0" role="button">
                                            account_circle
                                        </i>
                                        <span class="mdc-line-ripple"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="operadores-lista-modal-crear-usuario-flex-row-4">
                                <div class="operadores-lista-modal-aceptar-cambios"> <!-- FIXME: Aceptar cambios -->
                                    <button class="mdc-button mdc-button--raised" id="aceptarButtonOperadoresLista">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">
                                            Crear usuario
                                        </span>
                                    </button>
                                </div>
                                <div class="operadores-lista-modal-cancelar" data-close="operadores-lista-modalScreen" @click="modalInvisible"> <!-- FIXME: Cancelar -->
                                    <button class="mdc-button mdc-button--raised" id="cancelarButtonOperadoresLista" @click="actionToggle()">
                                        <span class="mdc-button__ripple"></span>
                                        <span class="mdc-button__label">
                                            Cancelar
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="mdc-dialog">
            <div class="mdc-dialog__container">
                <div class="mdc-dialog__surface" role="alertdialog" aria-modal="true" aria-labelledby="my-dialog-title" aria-describedby="my-dialog-content">
                    <div class="mdc-dialog__content" id="my-dialog-content">
                        ¿Estás de acuerdo con eliminar este usuario?
                    </div>
                    <div class="mdc-dialog__actions">
                        <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="cancel">
                            <div class="mdc-button__ripple"></div>
                            <span class="mdc-button__label">Estoy de acuerdo</span>
                        </button>
                        <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="discard">
                            <div class="mdc-button__ripple"></div>
                            <span class="mdc-button__label">Cancelar</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="mdc-dialog__scrim"></div>
        </div> -->
    </div>
</template>

<script>
    export default {
        data(){
            return {
                expedientes: [],
                loading: false
            }
        },

        mounted() {
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-correo-electronico .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-nombre .mdc-text-field"));
            new mdc.textField.MDCTextField(document.querySelector(".editar-perfil-operador-apellidos .mdc-text-field"));
        },

        methods:{
            modalVisible() {
                let openEls = document.querySelector("[data-open]");
                let modalId = openEls.dataset.open;
                let isVisible = "is-visible";
                document.getElementById(modalId).classList.add(isVisible);
            },
            modalInvisible() {
                const closeEls = document.querySelector("[data-close]");
                const modalIdClose = closeEls.dataset.close;
                const isVisible = "is-visible";
                document.getElementById(modalIdClose).classList.remove(isVisible);
            },
            actionToggle(){
                var action = document.querySelector(".action");
                action.classList.toggle("active");
            }
        }
    }
</script>

<style>
    .operadores-lista-main-container {
    width: 1920px;
    }

    .operadores-lista-title {
    display: flex;
    align-items: center;
    gap: 970px;
    margin-left: 100px;
    /* margin-top: 50px; */
    margin-bottom: 25px;
    }

    .operadores-lista-motor-busqueda {
    display: flex;
    flex-direction: row;
    width: 480px;
    height: 36px;
    background: transparent;
    border: 1.27273px solid #DFE1E5;
    box-sizing: border-box;
    border-radius: 30.5455px;
    transition: 0.2s ease-in-out;
    }

    .operadores-lista-icon-search-motor-busqueda {
    display: flex;
    align-items: center;
    margin-left: 16px;
    margin-right: 16px;
    font-size: 2em;
    color: rgba(0, 0, 0, 0.400);
    cursor: default;
    }

    .operadores-lista-motor-busqueda-text {
    display: flex;
    width: 410px;
    height: 34px;
    border: 2px;
    font-size: 18px;
    outline: none;
    }

    .operadores-lista-motor-busqueda:hover {
    box-shadow: 0 1px 6px rgb(32 33 36 / 28%);
    }

    .operadores-lista-container {
    display: flex;
    flex-direction: column;
    margin-left: 132px; /* Esto centra la tabla */
    }

    .operadores-lista-marco {
    display: flex;
    align-items: flex-end;
    width: 1656px;
    height: 50px;
    background-color: rgb(248, 248, 248);
    border-radius: 32px 32px 0px 0px;
    }

    .operadores-lista-row {
    display: flex;
    align-items: center;
    }

    .operadores-lista-foto-perfil-margen {
    width: 40px;
    height: 40px;
    margin-left: 16px;
    margin-right: 16px;
    border-radius: 32px;
    background-color: transparent;
    }

    .operadores-lista-list-scrolling {
    width: 1656px;
    height: 580px;
    overflow-y: auto;
    }

    .operadores-lista-item {
    height: 72px;
    }

    .operadores-lista-foto-perfil {
    width: 40px;
    height: 40px;
    /* margin-left: 16px; */
    margin-right: 16px;
    border-radius: 32px;
    background-color: black;
    }

    .operadores-lista-nombre {
    width: 200px;
    margin-right: 550px;
    }

    .operadores-lista-info {
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-wrap: wrap;
    gap: 149px;
    }

     .operadores-lista-email {
    width: 200px;
    }

    .operadores-lista-user {
    width: 105px;
    }

    .operadores-lista-status {
    width: 105px;
    }

    .operadores-lista-delete {
    width: 42px;
    height: 42px;
    margin-left: 50px;
    font-size: 2em;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s ease-in-out;
    cursor: pointer;
    border-radius: 32px;
    }

    .operadores-lista-delete:hover {
    background-color: transparent;
    border: 0.1px solid red;
    color: red;
    }

    .operadores-lista-boton-space {
    display: flex;
    flex-direction: row-reverse;
    margin-top: 25px;
    margin-right: 45px;
    }

    .action {
    position: fixed;
    bottom: 50px;
    width: 60px;
    height: 60px;
    background-color: var(--mdc-theme-primary);
    border-radius: 50%;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    }

    .action span {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 2em;
    transition: 0.3s ease-in-out;
    color: white;
    }

    .action.active span {
    transform: rotate(135deg);
    }
    /* FIXME: Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    /* Modal: */
    .operadores-lista-modal{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 1rem;
    background: rgba(0, 0, 0, 0.800);
    cursor: pointer;
    visibility: hidden;
    opacity: 0;
    transition: all 0.35s ease-in;
    z-index: 99;
    }

    .operadores-lista-modal-window {
    width: 850px;
    height: 394px;
    border-radius: 32px;
    background: white;
    cursor: default;
    z-index: 99;
    }

    .operadores-lista-modal-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    margin-top: 10px;
    }

    .operadores-lista-modal-crear-usuario-title {
    height: 16px;
    margin-left: 50px;
    margin-top: 25px;
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    }

    .operadores-lista-x
    #operadores-lista-x {
    align-items: flex-start;
    background-color: transparent;
    display: flex;
    font-size: 32px;
    }

    #operadores-lista-close-modal {
    cursor: pointer;
    background: transparent;
    border: none;
    outline: none;
    font-size: inherit;
    color: black;
    margin-right: 20px;
    margin-top: 18px;
    }

    .operadores-lista-modal.is-visible {
    visibility: visible;
    opacity: 1;
    }

    .x span {
    color: black;
    font-size: 32px;
    }

    .operadores-lista-modal-crear-usuario {
    display: flex;
    align-items: flex-start;
    background-color: transparent;
    flex-direction: column;
    flex-wrap: wrap;
    }

    /* FIXME: Datos personales */
    .operadores-lista-modal-crear-usuario-container {
    display: flex;
    align-items: flex-start;
    width: 750px;
    height: 179px;
    margin-left: 52px;
    margin-top: 36px;
    flex-direction: column;
    }

    .operadores-lista-modal-crear-usuario-datos-personales {
    letter-spacing: 0.15px;
    line-height: 16px;
    white-space: nowrap;
    }

    .operadores-lista-modal-crear-usuario-flex-row {
    display: flex;
    align-items: flex-start;
    margin-top: 18px;
    }

    .operadores-lista-modal-crear-usuario-flex-row-1 {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 25px;
    gap: 50px;
    }

    /* FIXME: Botones */
    .operadores-lista-modal-crear-usuario-flex-row-4 {
    display: flex;
    align-items: flex-start;
    width: 350px;
    height: 60px;
    margin-top: 50px;
    margin-left: 220px;
    gap: 50px;
    }

    #aceptarButtonOperadoresLista {
    border-radius: 32px;
    font-family: var(--font-family-gothic_a1);
    text-transform: none;
    }

    #cancelarButtonOperadoresLista {
    border-radius: 32px;
    background-color: rgb(207, 0, 0);
    font-family: var(--font-family-gothic_a1);
    text-transform: capitalize;
    }
</style>

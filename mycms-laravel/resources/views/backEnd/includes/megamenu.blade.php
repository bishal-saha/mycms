<li class="nav-item dropdown dropdown-fw dropdown-mega">
    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="fade"
       role="button">{{ Session('name') }} <i class="icon md-chevron-down" aria-hidden="true"></i></a>
    <div class="dropdown-menu" role="menu">
        <div class="mega-content">
            <div class="row">
                <div class="col-md-6">
                    <ul class="blocks-2">
                        <li class="mega-menu m-0">
                            <h5>Actions</h5>
                            <ul class="list-icons">
                                <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                            href="{{ route('client.dashboard', ['equitas_customer_id' => Session('equitas_customer_id')]) }}"
                                            role="menuitem">Dashboard</a></li>
                                <li><i class="md-chevron-right" aria-hidden="true"></i><a
                                            href="{{ route('clients.wallet', ['equitas_customer_id' => Session('equitas_customer_id')]) }}"
                                            role="menuitem">Recharge Wallet</a></li>

                                <li>
                                    <i class="md-chevron-right" aria-hidden="true"></i>
                                    <a href="{{ route('client.profile', ['equitas_customer_id' => Session('equitas_customer_id')]) }}"
                                       role="menuitem">My Profile</a>
                                </li>
                                <li>
                                    <i class="md-chevron-right" aria-hidden="true"></i>
                                    <a href="{{ route('client.tag', ['equitas_customer_id' => Session('equitas_customer_id'), 'method' => 'index']) }}"
                                       role="menuitem">My Tags</a>
                                </li>
                                <li>
                                    <i class="md-chevron-right" aria-hidden="true"></i>
                                    <a href="{{ route('client.tag', ['equitas_customer_id' => Session('equitas_customer_id'), 'method' => 'create']) }}"
                                       role="menuitem">Add Tag</a>
                                </li>
                                <li>
                                    <i class="md-chevron-right" aria-hidden="true"></i>
                                    <a href="{{ route('client.tag', ['equitas_customer_id' => Session('equitas_customer_id'), 'method' => 'transactions']) }}"
                                       role="menuitem">Transactions</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</li>
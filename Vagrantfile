Vagrant.configure("2") do |config|
    #############################################################
    # Local Virtualbox Provider
    #############################################################
    config.vm.provider :virtualbox do |v|
        v.name = "isfrankfamousyet.dev"
        v.customize ["modifyvm", :id, "--memory", 1024]
        config.vm.box = "ubuntu/trusty64"
        config.vm.network :private_network, ip: "192.168.13.37"
        config.ssh.forward_agent = true
    end

    #############################################################
    # Ansible provisioning
    #############################################################
    config.vm.provision "ansible" do |ansible|
        ansible.playbook = "ansible/playbook.yml"
        ansible.inventory_path = "ansible/inventories/dev"
        ansible.limit = 'all'
    end
    
    config.vm.synced_folder "./", "/vagrant", type: "nfs"
end

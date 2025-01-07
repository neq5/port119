<?php

// Change the namespace according to your project.
namespace App\Entity;

use HWI\Bundle\OAuthBundle\Security\Core\User\OAuthUserProvider;
use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\User\UserInterface;
use HWI\Bundle\OAuthBundle\OAuth\Response\PathUserResponse;

use Doctrine\ORM\EntityRepository;

#use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityManagerInterface;


#use Doctrine\ORM\EntityManagerInterface;

// Source: https://gist.github.com/danvbe/4476697


class FOSUBUserProvider extends BaseClass {

	
	/**
	 * @var EntityManagerInterface
	 */

	protected $us;
	protected $fb;
	protected $em;

    public function __construct($us, $fb, EntityManagerInterface $em)   #(EntityManagerInterface $em)
    {
	#$this->property = $property;
	$this->em = $em;
    }
	 

    public function connect(UserInterface $user, UserResponseInterface $response) {
        $property = $this->getProperty($response);
        
        $username = $response->getUsername();
        
        // On connect, retrieve the access token and the user id
        $service = $response->getResourceOwner()->getName();
        
        $setter = 'set' . ucfirst($service);
        $setter_id = $setter . 'Id';
        $setter_token = $setter . 'AccessToken';
        
        // Disconnect previously connected users
        if (null !== $previousUser = $this->userManager->findUserBy(array($property => $username))) {
            $previousUser->$setter_id(null);
            $previousUser->$setter_token(null);
            $this->userManager->updateUser($previousUser);
        }
        
        // Connect using the current user
        $user->$setter_id($username);
        $user->$setter_token($response->getAccessToken());
        $this->userManager->updateUser($user);
    }

    /*
    public function loadUserByOAuthUserResponse(UserResponseInterface $response) {
        $data = $response->getData();

	var_dump($data); die;

        $username = $response->getUsername();
        $email = $response->getEmail() ? $response->getEmail() : $username;
        $user = $this->userManager->findUserBy(array($this->getProperty($response) => $username));
        
        // If the user is new
        if (null === $user) {
            $service = $response->getResourceOwner()->getName();
            $setter = 'set' . ucfirst($service);
            $setter_id = $setter . 'Id';
            $setter_token = $setter . 'AccessToken';
            // create new user here
            $user = $this->userManager->createUser();
            $user->$setter_id($username);
            $user->$setter_token($response->getAccessToken());
            
            //I have set all requested data with the user's username
            //modify here with relevant data
            $user->setUsername($this->generateRandomUsername($username, $response->getResourceOwner()->getName()));
            $user->setEmail($email);
            $user->setPassword($username);
            $user->setEnabled(true);
            $this->userManager->updateUser($user);
            return $user;
        }
        
        // If the user exists, use the HWIOAuth
        $user = parent::loadUserByOAuthUserResponse($response);
        
        $serviceName = $response->getResourceOwner()->getName();
        
        $setter = 'set' . ucfirst($serviceName) . 'AccessToken';
        
        // Update the access token
        $user->$setter($response->getAccessToken());
        
        return $user;
    }

     */


    /*
public function loadUserByUsername($username)
    {
        $repository = $this->em->getRepository(User::class);
        #$repository = $this->getDoctrine()->getRepository(User::class);
	
	

        if (null !== $this->property) {
            $user = $repository->findOneBy([$this->property => $username]);
        } else {
            if (!$repository instanceof UserLoaderInterface) {
                throw new \InvalidArgumentException(sprintf('You must either make the "%s" entity Doctrine Repository ("%s") implement "Symfony\Bridge\Doctrine\Security\User\UserLoaderInterface" or set the "property" option in the corresponding entity provider configuration.', $this->classOrAlias, \get_class($repository)));
            }
            $user = $repository->loadUserByUsername($username);
        }

        if (null === $user) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }

        return $user;
    }
    
     */

    public function loadUserByOauthUserResponse(UserResponseInterface $response)
    {
	$tmp = $response->getData();

	$repository = $this->em->getRepository(User::class);

	$social_id = $response->getUsername();
	$nickname = $response->getNickname();
	$realname = $response->getRealName();
	$email = $response->getEmail();

	$profilepic = $response->getProfilePicture();


#	echo "$nickname"; die;
#TODO
#	move_uploaded_file($profilepic,"/tmp/test");
    	#$user->setProfilePicture($profilepic);

	$user = $repository->findOneBy(['email' => $email]);

	if(!$user)
	{
		$user = new User();




            $username = $response->getUsername();

	    $arr = explode("@", $email);
	    
	    $rand = rand(0,999);

	    $su = $arr[0] . "_" . $rand;

	    #$user->setUsername($arr[0]);
	    $user->setUsername($su);

	    $user->setEmail($email);
	    #$user->setPassword($username);
	    $user->setPassword("brak");
	    $user->setEnabled(true);

	    $this->em->persist($user);
	    $this->em->flush();
	    #$user->flush();
	    
	    $id = $user->getId();

	    #echo $id; die;
	    #$gdir = $this->getParameter('gallerydir');
	    $gdir = "/var/www/port119/public/gallery";

	    if(!file_exists("$gdir/$id"))
	    {
		mkdir("$gdir/$id");
	    }

	    #system("/bin/echo $id > /tmp/login");

	    copy("/var/www/port119/default_user.jpg", "/var/www/port119/public/avatar/$id.jpeg");

	    # c1dbf338-178f-4532-b71e-b61ffe1a69a2



	}


	return $user;

    }


    /**
     * Generates a random username with the given 
     * e.g 12345_github, 12345_facebook
     * 
     * @param string $username
     * @param type $serviceName
     * @return type
     */
    private function generateRandomUsername($username, $serviceName){
        if(!$username){
            $username = "user". uniqid((rand()), true) . $serviceName;
        }
        
        return $username. "_" . $serviceName;
    }
}

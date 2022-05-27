import React from 'react';
import {Button, Icon} from '@chakra-ui/react';
import {AiFillGithub} from "react-icons/ai";

type Props = {
    onSignin: () => void;
}

export const SigninForm = (props: Props) => {
    return (
        <div>
            <Button leftIcon={<Icon as={AiFillGithub}/>} size='md' onClick={props.onSignin}>Sign in with GitHub</Button>
        </div>
    );
}
